$(document).ready(function(){

	 $("#login").click(function(){	
		  user   = $("#user").val();
		  pass   = $("#pass").val();
		  url    = $("#url").val();
		  $.ajax({
		   type: "POST",
		   url: "controlador/login.php",
		   data: {"user":user,"pass":pass},
		   success: function(html){    
			if(html=='ok')    
			{
             
			 window.location=url;		
			}
			else if (html =='emptyname')
			{

			$("#mensaje").html("<script>swal({type:'warning',title:'Ingrese el Usuario',timer:2000,showConfirmButton: false})</script>");
			$('#correo').val("");
			$('#correo').focus();
			$('#pass').val("");

			}
			else if (html =='emptypwd')
			{

			$("#mensaje").html("<script>swal({type:'warning',title:'Ingrese la Contraseña',timer:2000,showConfirmButton: false})</script>");
			$('#pass').val("");
			$('#pass').focus();

			}
			else if (html =='emptynamepwd')
			{

			$("#mensaje").html("<script>swal({type:'warning',title:'Ingrese el Usuario y la Contraseña',timer:2000,showConfirmButton: false})</script>");
			$('#pass').val("");
			$('#pass').focus();

			}
			else   
			 {
	
			 $("#mensaje").html("<script>swal({type:'error',title:'Usuario o Contraseña Incorrectos',timer:2000,showConfirmButton: false})</script>");
			 $('#correo').val("");
			 $('#correo').focus();
			 $('#pass').val("");
			 //alert(html);
       
			}
		   },
		   beforeSend:function()
		   {

			$("#mensaje").html("Cargando...")
		   }
		  });
		return false;
	});
});