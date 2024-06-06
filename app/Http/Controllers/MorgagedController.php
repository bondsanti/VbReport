<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MorgagedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mortgaged.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('mortgaged.search');
    }
}
