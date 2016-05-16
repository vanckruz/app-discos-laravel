$(document).on("ready",function(){

	$("#add_artistas").on("click",function(e){
		e.preventDefault();
		if( $(".dinamic_artistas").length < 5 ){
			$(".dinamic_artistas:first").clone().appendTo(".artistas_content");			
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

	$(".eliminar_artista").on("click",function(e){
		e.preventDefault();
		var album_id = $(this).data("album_id");
		var artista_id = $(this).data("id");
		swal({
			title: '¿Estas seguro de eliminar este artista?',
	 		type: "warning",
	    	showCancelButton: true, 
	     	confirmButtonColor: "#DD6B55", 
        	confirmButtonText: "Eliminar", 
           	closeOnConfirm: false,
			html: true,
			}, function(){
			   
			swal({
			   	title:"Eliminado!",
			   	type: "success",
			   	confirmButtonText: "Aceptar",
			   },function(){

			}); 	

		}); 		

	});
	
	$("#fechapub,#album_fecha_edit").datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "1950:2016"});

	$(".ver_artistas").on("click",function(e){
		e.preventDefault();
		$(this).parents("table").find("tbody").slideToggle("slow");
	});

	$(".eliminar").on("click",function(){
		var $this = $(this);
		
		swal({
			title: '¿Estas seguro de eliminar este album?',
	 		type: "warning",
	    	showCancelButton: true, 
	     	confirmButtonColor: "#DD6B55", 
        	confirmButtonText: "Eliminar", 
           	closeOnConfirm: false,
			html: true,
			}, function(){
			   
			swal({
			   	title:"Eliminado!",
			   	type: "success",
			   	confirmButtonText: "Aceptar",
			   },function(){

			}); 	

		}); 	

	});

});