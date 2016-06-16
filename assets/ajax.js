$(document).ready(function(){
	$('.form').keyup(function(data){
		$.ajax({
			url: "/searching",
			method: 'post',
			data: $(this).serialize()
			}).done(function(data){
				$('#table_spot').html(data);
			})
			return false;
	})
});