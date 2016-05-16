<?php namespace App\Http\Controllers;

use App\Artistas;
use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{

    public function index()
    {

    	$albumes = Album::all();
	    return $albumes;
    }
}