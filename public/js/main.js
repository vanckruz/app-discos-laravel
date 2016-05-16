$(document).on("ready",function(){
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