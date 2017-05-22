  	$(function() {
    $('#student-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#login-form-2").fadeOut(100);
		$('#faculty-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#faculty-form-link').click(function(e) {
		$("#login-form-2").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#student-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});