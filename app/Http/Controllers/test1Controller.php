<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test1Controller extends Controller
{
    public function start() {
        return view('welcome');
    }
}
