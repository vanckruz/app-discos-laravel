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

	public function update(Request $request, $artista_id = null){
    	$artista = Artista::find($artista_id);
    	$artista->artista_nombre = $request->artista_edit;
    	$artista->artista_rol    = $request->rol_edit;
    	$artista->save();
		return "Artista editado correctamente";
	}

	public function destroy($artista_id = null){
    	Artista::find($artista_id)->delete();
		return "Artista eliminado";
	}


}