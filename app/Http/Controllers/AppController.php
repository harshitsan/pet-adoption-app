<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view('index');
    }

    public function cats() {
        return view('cats');
    }

    public function dogs() {
        return view('dogs');
    }
}
