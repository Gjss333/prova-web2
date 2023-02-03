<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {

        $information = Movie::all();

        return view('dashboard', compact('information'));
    }
}
