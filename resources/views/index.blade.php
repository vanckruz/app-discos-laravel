@extends('layout')

@section('content')

<div class="section_body_content container">
    <div id="mensajes_generales" class="row separador oculto alert alert-success"></div>
    <div class="row separador">
        <div class="section_body_title separador_interno col-xs-8 col-xs-offset-2 overflow0 white sombra_caja">
            <p class="left size-title black-text">Albumes</p>
            <button id="newAlbum" class="right btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Nuevo Album </button>
        </div>
    </div>

    <div class="row separador">
        <div class="section_body_body separador_interno col-xs-8 col-xs-offset-2 overflow0 white sombra_caja">
            @if($albumes->count() > 0)
                @foreach($albumes as $album)
                    <table class="table table-hover" ng-controller="inicialData">                        
                        <thead>
                            <tr>
                                <th class="info text-center">Album</th>
                                <th class="text-center">
                                    {{ $album->album_titulo }} - {{$album->album_fechapublicacion}}
                                </th>
                                <th class="text-right">
                                    <button class="btn btn-primary ver_artistas">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </button> 
                                    <button class="btn btn-success editar" data-toggle="modal" data-target="#modalEdit" data-id="{{ $album->album_id }}" data-titulo="{{ $album->album_titulo }}" data-fechapub="{{$album->album_fechapublicacion}}">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                    <button class="btn btn-danger eliminar" data-id="{{ $album->album_id }}" data-url="{{ route('eliminar_album') }}" ng-click="eliminarAlbum($event)">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </button>                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody class="artistas oculto">                        
                            <tr>
                                <th colspan="1" class="info text-center">
                                    <img src="{{ url('img/musician.png') }}" class="img img-responsive centrado">
                                    <p>Artistas</p>
                                </th>
                                <td colspan="2">

                                @if( !empty($album->artistas[0]) )
                                    <ul class="list-group" ng-controller="ArtistasController">
                                    @foreach($album->artistas as $artista)
                                        <li class="list-group-item blue-text pointer">
                                        <span class="glyphicon glyphicon-user"></span>
                                         {{ $artista->artista_nombre }}
                                         -
                                         {{ $artista->artista_rol }}
                                         <span class="badge eliminar_artista" data-albumid="{{$album->album_id}}" data-id="{{$artista->artista_id}}" data-url="{{route('eliminar_artista')}}" ng-click="eliminarArtista($event)">X</span>
                                         <span class="badge editar_artista"  data-id="{{$artista->artista_id}}" data-artista="{{ $artista->artista_nombre }}" data-rol="{{ $artista->artista_rol }}" data-albumid="{{$album->album_id}}" data-toggle="modal" data-target="#modalEditArtista"><span class="glyphicon glyphicon-pencil"></span></span>
                                            <!--</div>-->
                                        </li>
                                    @endforeach
                                    </ul>
                                @else
                                    <p class="mensaje-alerta">No hay artistas asociados</p>
                                @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
            @else
                <p class="mensaje-alerta">No existen albumes</p>
            @endif            
        </div>
    </div>

    <!--Paginador-->
    <div class="row">
        <div class="col-xs-12 text-center">
            {!! $albumes->render() !!}    
        </div>
    </div>
    <!--Paginador-->
        
    @include('modales')
 
    <!--div principal-->
</div>

@stop