<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PennController extends Controller
{
    public function index() {
        return view('penn');
    }
}
