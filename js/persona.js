$.post(baseUrl+'CiudadController/getCiudades',
		{
			sitReg: 1
		},
		function(data) {
			// alert(data);
			var c = JSON.parse(data);
			// alert(data);
			$.each(c,function(i,item){
				$('#cbociudad').append('<option value="'+item.id+'">'+item.nombre+'</option>')
			});
		});


// $.ajax({
//   type: "POST",
//   url: url,
//   data: data,
//   success: success,
//   dataType: dataType
// });