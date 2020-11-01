<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('firstpage');
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        return view('welcome');
    }

    public function show($id)
    {
        return view('welcome');
    }

    public function edit($id)
    {
        return view('welcome');
    }

    public function update(Request $request, $id)
    {
        return view('welcome');
    }

    public function destroy($id)
    {
        return view('welcome');
    }
}
