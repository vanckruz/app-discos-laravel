@extends('layout')

@section('content')
    <div class="section_body_content container">
        <div class="row separador">
            <div class="section_body_title separador_interno col-xs-8 col-xs-offset-2 overflow0 white sombra_caja">
                <p class="left size-title black-text">Albumes</p>
                <button id="newAlbum" class="right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nuevo Album</button>
            </div>
        </div>
        <div class="row separador">
            <div class="separador section_body_body separador_interno col-xs-8 col-xs-offset-2 overflow0 white sombra_caja">
                @if($albumes->count() > 0)
                    @foreach($albumes as $album)
                        <div class="separador_top clear_all titulo_album left black-text size-title">
                         <div class="col-xs-2">
                             <img src="{{ url('img/sheet-music.png') }}" class="img img-responsive">
                         </div>  
                         <div class="col-xs-10">                             
                            {{ $album->album_titulo }} - {{$album->album_fechapublicacion}}</div>
                         </div>
                        <div class="opciones right">
                            <button class="btn btn-primary editar"><span class="glyphicon glyphicon-pencil"></span></button>
                            <button class="btn btn-danger eliminar"><span class="glyphicon glyphicon-remove"></span></button>
                        </div>
                        <div class="col-xs-12">
                            <hr class="clear_all">
                        </div>
                        <div class="separador_interno artistas ">
                            <div class="">
                                <div class="col-xs-2 caja  text-center separador_interno">
                                    <img src="{{ url('img/musician.png') }}" class="img img-responsive">
                                    <p class="black-text">Artistas</p>
                                </div>
                                <div class="col-xs-10">
                                    @if($album->artistas != null)
                                        <ul class="list-group">
                                        @foreach($album->artistas as $artista)
                                            <li class="list-group-item blue-text pointer">{{ $artista->artista_nombre }}</li>
                                        @endforeach
                                        </ul>
                                    @else
                                        <p class="mensaje-alerta">No hay artistas asociados</p>
                                    @endif
                                </div>                                
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="mensaje-alerta">No existen albumes</p>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center">
                {!! $albumes->render() !!}    
            </div>
        </div>
    </div>
@stop