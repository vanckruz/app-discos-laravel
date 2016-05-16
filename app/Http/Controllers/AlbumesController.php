<?php namespace App\Http\Controllers;

use App\Artistas;
use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlbumesController extends Controller
{

    public function index(Request $request)
    {
    	$albumes = Album::all()->with('artistas');
	    dd($albumes);
	    return view('index',compact("albumes"));
    }
}