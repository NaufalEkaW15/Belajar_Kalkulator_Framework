<?php

namespace App\Controllers;

class Kalkulator extends BaseController
{
    public function index(): string
    {
        return view('Kalkulator/index');
    }
}
