<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Movie;

class MainController extends Controller
{
    public function index() {
        $movies = Movie::all();

dd($movies);

        return view('welcome');
    }
    
}
