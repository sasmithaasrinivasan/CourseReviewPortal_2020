$(document).ready(function() {
	$("#country").change(function() {
		var country_id = $(this).val();
		if(country_id != "") {
			$.ajax({
				url:"get-states.php",
				data:{c_id:country_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#state").html(resp);
				}
			});
		} else {
			$("#state").html("<option value=''>------- Select --------</option>");
		}
	});
	

});

function onchange1(){


	var elective = document.getElementById('state').value;
	if(elective != "") {
		$.ajax({
			url:"fo.php",
			data:{id:elective},
			type:'POST',
			success:function(response) {
				var resp = $.trim(response);
				$("#result").html(resp);
			}
		});
	} else {
		$("#result").html("<option value=''>------- Select --------</option>");
	}


}

