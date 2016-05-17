var app = angular.module("discografia",[], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<<');
        $interpolateProvider.endSymbol('>>');
    });

app.controller("newAlbumController",function($scope,$http){

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
		}).error(function(){

		});
	}

});

