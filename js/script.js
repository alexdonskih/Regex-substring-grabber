$(document).ready(function(){
	$('#regex').keyup(function(){

		var regex = $(this).val();
		var content = $('#content').val();

		$.post("backend.php",{
				regex: regex,
				content: content,
				action: 'process_regex'
			},
			function(response){
				$('.alert').html(response);
			}
		);
	});
});