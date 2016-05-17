var app = angular.module("discografia",[], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<<');
        $interpolateProvider.endSymbol('>>');
    });

app.controller("inicialData",function($scope,$http){

	$scope.eliminarAlbum = function(event){
		angular.element(event.target);
		var album_id = $(event.target).data("id");
		var ruta = $(event.target).data("url")+"/"+album_id;

		swal({
			title: '¿Estas seguro de eliminar este album?',
	 		type: "warning",
	    	showCancelButton: true, 
	     	confirmButtonColor: "#DD6B55", 
        	confirmButtonText: "Eliminar", 
           	closeOnConfirm: false,
			html: true,
			}, function(){

				$http.delete(ruta)
				.success(function(data){
					$("#myModal").find(".mensaje").show();
					$("#mensajes_generales").html(data).show();
					//$scope.msg = data;
    				window.setTimeout(function(){ location.reload(); }, 1500);
				}).error(function(){

				});				
			   
			swal({
			   	title:"Eliminado!",
			   	type: "success",
			   	confirmButtonText: "Aceptar",
			   },function(){

			}); 	

		}); //fin swal	

	}//Eliminar album

}).controller("ArtistasController",function($scope,$http){

	$scope.eliminarArtista = function(event){
		angular.element(event.target);
		var artista_id = $(event.target).data("id");
		var ruta = $(event.target).data("url")+"/"+artista_id;
		console.log(ruta);
		swal({
			title: '¿Estas seguro de eliminar este artista?',
	 		type: "warning",
	    	showCancelButton: true, 
	     	confirmButtonColor: "#DD6B55", 
        	confirmButtonText: "Eliminar", 
           	closeOnConfirm: false,
			html: true,
			}, function(){

				$http.delete(ruta)
				.success(function(data){
					$("#mensajes_generales").html(data).show();
					//$scope.msg = data;
    				window.setTimeout(function(){ location.reload(); }, 1500);
				}).error(function(){

				});					
			   
			swal({
			   	title:"Eliminado!",
			   	type: "success",
			   	confirmButtonText: "Aceptar",
			   },function(){

			}); 	

		}); 		
	}//Eliminar artista	
	

}).controller("newAlbumController",function($scope,$http){

	$scope.crearAlbum = function(){
		var ruta = $("#form_album").attr("action");
		var data = $('#form_album').serializeObject();
		console.log(data);
		
		$http.post(ruta,data)
		.success(function(data){
			$("#myModal").find(".mensaje").show();
			$scope.msg = data;
		}).error(function(){

		});
	}

}).controller("editAlbumController",function($scope,$http){
	$scope.msg = "";

	$scope.editarAlbum = function(){
		var ruta = $("#form_album_editar").attr("action")+"/"+$("#album_id_edit").val();
		var data = $('#form_album_editar').serializeObject();
		
		$http.put(ruta,data)
		.success(function(data){
			$("#modalEdit").find(".mensaje").show();
			$scope.msg = data;
    
    		window.setTimeout(function(){ location.reload(); }, 1500);

		}).error(function(){

		});
	}

}).controller("editArtistaController",function($scope,$http){

	$scope.editarArtista = function(){
		var ruta = $("#form_edit_artista").attr("action")+"/"+$("#artistaid_edit").val();
		var data = $('#form_edit_artista').serializeObject();

		$http.put(ruta,data)
		.success(function(data){
			$("#modalEditArtista").find(".mensaje").show();
			$scope.msg = data;
    
    		window.setTimeout(function(){ location.reload(); }, 1500);

		}).error(function(){

		});
	}

});

