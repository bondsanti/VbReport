<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        return view('lists.index');
    }

    public function search()
    {
        return view('lists.list_search');
    }
}
