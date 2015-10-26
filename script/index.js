$(document).ready(function(){
	$('.tutuul li a img').click(function(){
		var src = $(this).attr('src')
		$('.tanchuceng .tanchuimg').attr("src",src)
		
		$(".tanchuceng").show();
		
	})
	
	$('.tanchuceng .chacha').click(function(){
		$('.tanchuceng').hide()
	})
})