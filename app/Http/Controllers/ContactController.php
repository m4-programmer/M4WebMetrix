<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('OtherPages.contact');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}
