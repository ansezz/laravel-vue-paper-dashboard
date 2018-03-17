<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('index');
    }
}
