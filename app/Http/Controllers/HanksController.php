<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HanksController extends Controller
{
    public function index() {
        return view('hanks');
    }
}
