<?php namespace App\Http\Controllers;

use App\Artista;
use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlbumesController extends Controller
{

    public function index(Request $request)
    {
    	$albumes = Album::with('artistas')->get();
	    return $albumes;
    }

	public function show($album_id){

	}
		
	public function store(Request $request){
		$album = new Album();
		$album->album_titulo = $request->titulo;
		$album->album_fechapublicacion = $request->fechapub;
		$album->save();

		/*Clasificación de los arreglos separados de la vista*/
		$vector = [];
		$_artistas 	= ["pepe","juan","maria"];
		$_rol 		= ["rock","pop","jass"];

		foreach ($_artistas as $artista) {
			$vector['artista'][] = $artista;
		}
		
		foreach ($_rol as $rol) {
			$vector['rol'][] = $rol;
		}

		$artistas = [];

		for ($i=0; $i < sizeof($vector['artista']); $i++) { 
			$artistas[] = [ 'artista_nombre' => $vector['artista'][$i] , 'artista_rol' => $vector['rol'][$i] ];
		}
		/*Clasificación de los arreglos separados de la vista*/

		foreach ($artistas as $key => $value) {
			$artista = new Artista();
			$artista->artista_nombre = $value['artista_nombre'];
			$artista->artista_rol    = $value['artista_rol'];
			$artista->album_id       = $album->album_id;
			$artista->save();
		}

		return "Registro exitoso del album".$album->album_titulo;

	}

	public function update(){

	}

	public function destroy(){

	}


}