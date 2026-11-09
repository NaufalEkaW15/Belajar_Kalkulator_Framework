<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/kalkulator.css') ?>">
</head>
<body>
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1>Kalkulator Sederhana</h1>
            <button class="btn btn-dark toggle-btn" onclick="toggleDarkMode()"><span id="modeIcon">🌙</span> Mode</button>
        </div>

        <div class="card mx-auto p-4 shadow" style="max-width: 400px;">
            <input type="text" class="form-control text-end fs-4 mb-3" id="display" readonly placeholder="0">

            <div class="row g-2">
                <div class="col-3"><button class="btn btn-light w-100" onclick="append('7')">7</button></div>
                <div class="col-3"><button class="btn btn-light w-100" onclick="append('8')">8</button></div>
                <div class="col-3"><button class="btn btn-light w-100" onclick="append('9')">9</button></div>
                <div class="col-3"><button class="btn btn-warning w-100" onclick="append('/')">÷</button></div>

                <div class="col-3"><button class="btn btn-light w-100" onclick="append('4')">4</button></div>
                <div class="col-3"><button class="btn btn-light w-100" onclick="append('5')">5</button></div>
                <div class="col-3"><button class="btn btn-light w-100" onclick="append('6')">6</button></div>
                <div class="col-3"><button class="btn btn-warning w-100" onclick="append('*')">×</button></div>

                <div class="col-3"><button class="btn btn-light w-100" onclick="append('1')">1</button></div>
                <div class="col-3"><button class="btn btn-light w-100" onclick="append('2')">2</button></div>
                <div class="col-3"><button class="btn btn-light w-100" onclick="append('3')">3</button></div>
                <div class="col-3"><button class="btn btn-warning w-100" onclick="append('-')">−</button></div>

                <div class="col-3"><button class="btn btn-danger w-100" onclick="resetCalc()">C</button></div>
                <div class="col-3"><button class="btn btn-light w-100" onclick="append('0')">0</button></div>
                <div class="col-3"><button class="btn btn-success w-100" onclick="calculate()">=</button></div>
                <div class="col-3"><button class="btn btn-warning w-100" onclick="append('+')">+</button></div>
            </div>
        </div>

        <div class="card mt-4 mx-auto p-3" style="max-width: 400px;">
        <button class="btn btn-sm btn-outline-danger" onclick="clearHistory()">Clear History</button>
            <h5>Riwayat Perhitungan:</h5>
            <ul class="list-group" id="historyList"></ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/kalkulator.js') ?>"></script>
</body>
</html>
