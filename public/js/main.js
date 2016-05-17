$.fn.serializeObject = function()
{
   var o = {};
   var a = this.serializeArray();
   $.each(a, function() {
       if (o[this.name]) {
           if (!o[this.name].push) {
               o[this.name] = [o[this.name]];
           }
           o[this.name].push(this.value || '');
       } else {
           o[this.name] = this.value || '';
       }
   });
   return o;
};

$(document).on("ready",function(){

	$("#add_artistas").on("click",function(e){
		e.preventDefault();
		var html = '<div class="dinamic_artistas"><div class="col-xs-6">';
			html+= '<label for="nombre_artista">Artista:</label>';
            html+= '<input type="text" class="form-control" name="artistas"></div>';
            html+= '<div class="col-xs-6"><label for="rol">Rol:</label>';
            html+= '<input type="text" class="form-control" name="rol">';
            html+= '</div></div>';

		if( $(".dinamic_artistas").length < 5 ){
			//$(".dinamic_artistas:first").clone().appendTo(".artistas_content");			
			$(".artistas_content").append(html);
		}
	});
	
	$("#del_artistas").on("click",function(e){
		e.preventDefault();
		if( $(".dinamic_artistas").length > 1 ){
			$(".dinamic_artistas:last").remove();
		}
	});		

	$(".editar").on("click",function(e){
		e.preventDefault();
		var $this = $(this);
		$("#album_id_edit").val($this.data("id"));
		$("#album_titulo_edit").val($this.data("titulo"));
		$("#album_fecha_edit").val($this.data("fechapub"));
	});

	$(".editar_artista").on("click",function(e){
		e.preventDefault();
		var $this = $(this);
		$("#albumid_edit").val($this.data("albumid"));
		$("#artistaid_edit").val($this.data("id"));
		$("#artista_edit").val($this.data("artista"));
		$("#rol_edit").val($this.data("rol"));
	});

	$("#fechapub,#album_fecha_edit").datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "1950:2016"});

	$(".ver_artistas").on("click",function(e){
		e.preventDefault();
		$(this).parents("table").find("tbody").slideToggle("slow");
	});

});

