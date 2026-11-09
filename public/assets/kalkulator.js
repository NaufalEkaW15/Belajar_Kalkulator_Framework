let expression = "";
let resultJustCalculated = false;

function append(val) {
  if (resultJustCalculated) {
    // Jika input selanjutnya angka, mulai dari awal
    if (!isNaN(val)) {
      expression = val;
    } else {
      expression += val; // jika operator, tetap lanjut
    }
    resultJustCalculated = false;
  } else {
    expression += val;
  }
  document.getElementById("display").value = expression;
}

function calculate() {
  try {
    const result = eval(expression);
    document.getElementById("display").value = result;
    addToHistory(expression + " = " + result);
    expression = "" + result;
    resultJustCalculated = true;
  } catch {
    document.getElementById("display").value = "Error";
    expression = "";
  }
}

function resetCalc() {
  expression = "";
  document.getElementById("display").value = "";
  // Jangan hapus historyList
  // document.getElementById('historyList').innerHTML = "";
}

function clearHistory() {
  document.getElementById("historyList").innerHTML = "";
}

function toggleDarkMode() {
  const html = document.querySelector("html");
  const modeIcon = document.getElementById("modeIcon");
  const theme = html.getAttribute("data-bs-theme");

  if (theme === "dark") {
    html.setAttribute("data-bs-theme", "light");
    modeIcon.textContent = "🌙";
  } else {
    html.setAttribute("data-bs-theme", "dark");
    modeIcon.textContent = "☀️";
  }
}

function addToHistory(entry) {
  const historyList = document.getElementById("historyList");
  const li = document.createElement("li");
  li.className = "list-group-item";
  li.textContent = entry;
  historyList.prepend(li);
}
