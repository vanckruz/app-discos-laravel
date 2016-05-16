<?php namespace App\Http\Controllers;

use App\Artista;
use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtistasController extends Controller
{

    public function index(Request $request)
    {
    	$artistas = Artista::with('albumes')->get();
	    return $artistas;
    }

	public function show($artista_id){

	}
		
	public function store(Request $request){
		
	}

	public function update(){

	}

	public function destroy(){

	}


}