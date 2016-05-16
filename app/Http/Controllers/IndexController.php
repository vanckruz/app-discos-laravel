<?php namespace App\Http\Controllers;

use App\Artista;
use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{

    public function index(Request $request)
    {
    	$albumes = Album::with('artistas')->paginate(5);
	    //dd($albumes);
	    return view('index',compact("albumes"));
    }

}