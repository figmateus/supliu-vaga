<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TrackController extends Controller
{
    
    public function Create():View
    {
        return view('track/create');
    }

    public function Store(Request $request) {
        
    }

    public function Edit(int $id):View
    {
        return view('track/edit');
    }

    public function Update(int $id, Request $request) {

    }

    public function Delete(int $id) {
        
    }
}