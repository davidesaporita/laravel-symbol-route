<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RobbinsController extends Controller
{
    public function index() {
        return view('robbins');
    }
}
