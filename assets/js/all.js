$(function() { 
	$( ".expand-more" ).click(function() {     
	   $('#wafSpecs').toggle();
	   $(this).hide();
	});

	var form = $('#signupForm');
	var formMessages = $('#message');

	$(form).submit(function(event) {
	    event.preventDefault();
	    var formData = $(form).serialize();

	    $.ajax({
		    type: 'POST',
		    url: $(form).attr('action'),
		    data: formData
		})
		.done(function(response) {

		    $(formMessages).removeClass('badge-danger');
		    $(formMessages).addClass('badge-success');

		    $(formMessages).text(response);

		    $('#name').val('');
		    $('#email').val('');
		    $('#company').val('');
		    $('#phone').val('');
		    $('#social').val('');
		    $('#plan').val('');
		    $('#website').val('');
		    $('#origin').val('');
		    $('#message').val('');
		})
		.fail(function(data) {

		    $(formMessages).removeClass('badge-success');
		    $(formMessages).addClass('badge-danger');
		    if (data.responseText !== '') {
		        $(formMessages).text(data.responseText);
		    } else {
		        $(formMessages).text('Oops! An error occured and your message could not be sent.');
		    }
		});

	});
});