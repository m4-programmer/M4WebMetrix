<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewProjectController extends Controller
{
    public function index($name)
    {
        // if the passed variable matches an entry in the database, display the item in the databse


        //else redirect user to a 404 page or homepage
        return view('OtherPages.projectPreviewer', compact('name'));
    }
}
