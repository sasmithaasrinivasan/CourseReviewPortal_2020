function data(){
	//document.getElementById('details').innerHTML = "Hello";

	var sem = $("country").val();
	var elective = $("state").val();
	if (elective!=" "){


		$.ajax({
			url:"fo.php",
			data:{s_id:elective},
			type:'POST',
			success:function(response) {
				var resp = $.trim(response);
				//document.getElementById('details').innerHTML = resp;
				$("#details").html(resp.toString());
			}
		});


	}

	else{

		

	}
	

	



}