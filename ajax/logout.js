 var url2  = "http://192.168.10/dev/tunel_gmb/";
 //var url2  = "http://sisgestun.perutec.com.pe/";

function logout(){

	$.ajax({
		url:url2+'controlador/logout.php',
		type:'POST',
		async:true,
		data:{accion:'logout'},
		success:function()
		{
			self.location=url2;
		},
		error:function(xhr,status,error)
		{
			alert('ERROR: '+error);
		}


	});
}