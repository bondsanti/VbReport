<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddReportController extends Controller
{
    public function index()
    {
        return view('add.index');
    }


    public function edit()
    {
        return view('editadd.index');
    }
}
