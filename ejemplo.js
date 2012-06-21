// JavaScript Document
$(document).ready(function(e) {
			
	$(".ObtenerInfo").click(function(){
		//Como es solo un ejemplo le daremos un ID inventado por nosotros
		//user = this.id;
		user = 88;
					
		$.ajax({
			async:	true, //modo asyncrono
			data:	"id="+user+"&identi=usuario", //definimos las variables
			type:	"post",	//el metodo de envio será POST o GET
			url:	"datos.php", //indicamos la ruta donde se enviaran los datos.
			dataType:"json", //indicamos que reciviremos un archivo json
			
			success: function(data){ 
						/*	success se ejecutara cuando todo salga bien y recivimos los datos sin problemas, 
							indicamos que "data" será el json recivido.
							podremos crear una funcion anonima ahí mismo como está el ejemplo o hacer un llamado a una función.
						*/
						nombre = data.nombre+" "+data.apellido;
						$('#nombre_completo').attr('value',nombre);
						$('#mail').attr('value',data.mail);
						$('#twitter').attr('value',data.twitter);
					}
		});
	});
	
	$(".ObtenerInfoProducto").click(function(){
		user = 30;
		
		$.ajax({
			async:	true, 					
			data:	"id="+user+"&identi=producto",
			type:	"post",					
			url:	"datos.php",					
			dataType:"json",
			success: function(data){
						$('#nombreProducto').attr('value',data.nombre);
						$('#descripcion').attr('value',data.descripcion);
						$('#stock').attr('value',data.stock);
					}
		});
	});			
});