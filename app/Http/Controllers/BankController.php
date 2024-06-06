<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index()
    {
        return view('report.banking.bank');
    }
    public function search()
    {
        return view('report.banking.bank_search');
    }
}
