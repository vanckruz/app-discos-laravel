@extends('layout')

@section('content')

<div class="section_body_content container">
    
    <div class="row separador">
        <div class="section_body_title separador_interno col-xs-8 col-xs-offset-2 overflow0 white sombra_caja">
            <p class="left size-title black-text">Albumes</p>
            <button id="newAlbum" class="right btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Nuevo Album</button>
        </div>
    </div>

    <div class="row separador">
        <div class="section_body_body separador_interno col-xs-8 col-xs-offset-2 overflow0 white sombra_caja">
            @if($albumes->count() > 0)
                @foreach($albumes as $album)
                    <table class="table table-hover">
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
                                    <button class="btn btn-danger eliminar" data-id="{{ $album->album_id }}">
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
                                    <ul class="list-group">
                                    @foreach($album->artistas as $artista)
                                        <li class="list-group-item blue-text pointer">
                                        <span class="glyphicon glyphicon-user"></span>
                                         {{ $artista->artista_nombre }}
                                         -
                                         {{ $artista->artista_rol }}
                                         <span class="badge eliminar_artista" data-albumid="{{$album->album_id}}" data-id="{{$artista->artista_id}}"><span class="glyphicon glyphicon-remove"></span></span>
                                         <span class="badge editar_artista"  data-id="{{$artista->artista_id}}" data-artista="{{ $artista->artista_nombre }}" data-rol="{{ $artista->artista_rol }}" data-albumid="{{$album->album_id}}" data-toggle="modal" data-target="#modalEditArtista"><span class="glyphicon glyphicon-pencil"></span></span>
                                            </div>
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
</div>

<!-- Modal agregar-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nuevo Album</h4>
      </div>
      <div class="modal-body overflow0">
        <form action="" method="post" id="form_album">
            {{ csrf_field() }}
            <label for="titulo">Titulo:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo del album">
            <label for="fechapublicacion">Fecha Publicación</label>
            <input type="text" class="form-control pointer" id="fechapub" name="fechapub" readonly="true" placeholder="Clickea este campo para seleccionar la fecha">
            <hr>
            <p class="text-center size-title overflow0">
                Agregar artistas 
                <button class="btn btn-danger right" id="del_artistas">
                    <span class="glyphicon glyphicon-minus"></span>
                </button>                
                <button class="btn btn-primary right" id="add_artistas">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </p>
            <div class="artistas_content">
                <div class="dinamic_artistas"> 
                    <div class="col-xs-6">
                        <label for="nombre_artista">Artista:</label>
                        <input type="text" class="form-control" name="artistas[]">
                    </div>
                    <div class="col-xs-6">
                        <label for="rol">Rol:</label>
                        <input type="text" class="form-control" name="rol[]">
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="send_form_album" class="btn btn-primary right"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
      </div>
    </div>

  </div>
</div>    
<!-- Modal agregar-->

<!-- Modal editar-->
<div id="modalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nuevo Album</h4>
      </div>
      <div class="modal-body">
            <form action="" method="post" id="form_album_id">
            {{ csrf_field() }}
            <input type="hidden" id="album_id_edit" name="album_id_edit">
            <label for="titulo">Titulo:</label>
            <input type="text" class="form-control" name="album_titulo_edit" id="album_titulo_edit" placeholder="Titulo del album">
            <label for="fechapublicacion">Fecha Publicación</label>
            <input type="text" class="form-control pointer" id="album_fecha_edit" name="album_fecha_edit" readonly="true" placeholder="Clickea este campo para seleccionar la fecha">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="send_form_edit_album" class="btn btn-primary right"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
      </div>
    </div>

  </div>
</div>    
<!-- Modal editar artista-->

<!-- Modal editar-->
<div id="modalEditArtista" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar artista</h4>
      </div>
      <div class="modal-body">
        <form action="" id="form_edit_artista" method="post">    
            {{ csrf_field() }}
            <input type="hidden" id="albumid_edit" name="albumid_edit">
            <input type="hidden" id="artistaid_edit" name="artistaid_edit">
            <label for="artista">Artista:</label>
            <input type="text" class="form-control" name="artista_edit" id="artista_edit">
            <label for="artista">Rol:</label>
            <input type="text" class="form-control" name="rol_edit" id="rol_edit">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="send_form_edit_album" class="btn btn-primary right"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
      </div>
    </div>

  </div>
</div>    
<!-- Modal editar artista-->
@stop