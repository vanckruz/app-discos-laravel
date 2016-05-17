<!-- Modal agregar-->
<div id="myModal" class="modal fade" role="dialog" ng-controller="newAlbumController">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nuevo Album</h4>
      </div>
      <div class="modal-body overflow0">
        <form action="{{ route('crear_album') }}" method="post" id="form_album">
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
                        <input type="text" class="form-control" name="artistas">
                    </div>
                    <div class="col-xs-6">
                        <label for="rol">Rol:</label>
                        <input type="text" class="form-control" name="rol">
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="mensaje alert alert-success oculto text-center"><< msg >></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="send_form_album" class="btn btn-primary right" ng-click="crearAlbum()">
            <span class="glyphicon glyphicon-floppy-disk"></span>
            Guardar
        </button>
      </div>
    </div>

  </div>
</div>    
<!-- Modal agregar-->

<!-- Modal editar Album-->
<div id="modalEdit" class="modal fade" role="dialog" ng-controller="editAlbumController">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Album</h4>
      </div>
      <div class="modal-body">
              <form action="{{ route('editar_album') }}" method="post" id="form_album_editar">
              {{ csrf_field() }}
              <input type="hidden" id="album_id_edit" name="album_id_edit">
              <label for="titulo">Titulo:</label>
              <input type="text" class="form-control" name="album_titulo_edit" id="album_titulo_edit" placeholder="Titulo del album">
              <label for="fechapublicacion">Fecha Publicación</label>
              <input type="text" class="form-control pointer" id="album_fecha_edit" name="album_fecha_edit" readonly="true" placeholder="Clickea este campo para seleccionar la fecha">
            </form>
      </div>
      <div class="modal-footer">
        <div class="mensaje alert alert-success oculto text-center"><< msg >></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="send_form_edit_album" class="btn btn-primary right" ng-click="editarAlbum()"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
      </div>
    </div>

  </div>
</div>    
<!-- Modal editar Album-->

<!-- Modal editar-->
<div id="modalEditArtista" class="modal fade" role="dialog" ng-controller="editArtistaController">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar artista</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('editar_artista') }}" id="form_edit_artista" method="post">    
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
        <div class="mensaje alert alert-success oculto text-center"><< msg >></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="send_form_edit_album" class="btn btn-primary right" ng-click="editarArtista($event)">
          <span class="glyphicon glyphicon-floppy-disk"></span> Guardar
        </button>
      </div>
    </div>

  </div>
</div>    
<!-- Modal editar artista-->