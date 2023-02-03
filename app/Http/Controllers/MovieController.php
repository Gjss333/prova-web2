<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        
        Movie::create([
            'title'=>$request->input('title'),
            'director'=>$request->input('director'),
            'genre'=>$request->input('genre'),
            'release_yeah'=>$request->input('release_yeah'),
            'user_id' => auth()->user()->id
        ]);
        

        return redirect()->route('dashboard');
    }

    public function edit()
    {
        
    }

    public function update () 
    {

    }

    public function destroy($id)
    {
        Movie::where('id', $id)->delete();
        return back();
    }
    
}