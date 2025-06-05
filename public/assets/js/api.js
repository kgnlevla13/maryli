
$("#subscribe").on("submit", function(e) {
	e.preventDefault()
	$.post(api_url + "/subscribe", $(this).serialize(), null, "json").done(response => {
		if (response.error){
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		}else if(response.info) {
			Swal.fire({icon: 'info', title: '!...', text: response.info})
		} else {
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});


$("#contact").on("submit", function(e) {
	e.preventDefault();
	var form = $(this);

	$.post(api_url + "/contact", form.serialize(), null, "json").done(response => {
		if (response.error) {
			Swal.fire({ icon: 'error', title: '!...', text: response.error });
		} else if (response.info) {
			Swal.fire({ icon: 'info', title: '!...', text: response.info });
		} else {
			Swal.fire({ icon: 'success', title: 'Congratulations...', text: response.success });

            // Reset the form
			form[0].reset();
		}
	});
});