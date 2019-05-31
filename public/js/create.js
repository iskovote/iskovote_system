

$(document).ready(function(){

	$('#addform_student')on('submit', function(e){
		e.preventDefault;

		$ajax({
			type: "POST",
			url: "/studentadd",
			data: $('#addform_student').serialize(),
			success: function(response){
				console.log(response)
				$('#addStudent').modal('hide')
				alert("Student record added successfully");
			},
			error: function(error){
				console.log(error)
				alert("Error! Student record not added");
			}
		});
	});
});
	

