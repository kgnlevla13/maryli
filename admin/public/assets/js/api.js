function send_email(formId){
	var data = $(formId).serialize();
	$.post(api_url + '/send-email', data, function (response) {
		if (response.error){
			swal("!", response.error, "error");
		} else {
			swal("Congratulations", response.success, "success");
		}
	}, 'json');
}



function delete_post(selectedCategory = null){

	$(document).on("click",".delete",function() {

		Swal.fire({
			title: 'Are You Sure You Want to Delete?',
			text: "If you delete it, you cannot undo this action!",
			icon: 'warning',
			cancelButtonText: "Give up!",
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, Delete!'
		}).then((result) => {
			if (result.isConfirmed) {

				var delete_id = selectedCategory != null ? selectedCategory : $(this).attr('id');
				var table = $(this).attr('table');
				var column = $(this).attr('column');
				var delfade = $(this).closest('.col-md-6.col-xxl-2.box-col-6');

				$.post(api_url + "/delete-post",{
					"id" :delete_id,
					"table" :table,
					"column" :column}, function (response){

						if (response) {
							Swal.fire('Congratulations','Deletion Successful.','success')
							delfade.hide(500);
						}
						else{
							Swal.fire('Error','A problem occurred while deleting.','error');
						}
					});

			}
		})

	});
}

$("#login").on("submit", function(e) {
	e.preventDefault()
	$.post(api_url + "/login", $(this).serialize(), null, "json").done(response => {
		if (response.error){
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})
			document.getElementById("lgn").disabled = true;

			setTimeout(function() {
				window.location.href = site_url + "admin";
			}, 2000);
			
		}
	})
});


$("#general").on("submit", function(e) {
	e.preventDefault()
	$.post(api_url + "/general", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});

$("#general2").on("submit", function(e) {
	e.preventDefault()
	$.post(api_url + "/general2", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});

$("#general3").on("submit", function(e) {
	e.preventDefault()
	$.post(api_url + "/general3", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});

$("#privacypolicy").on("submit", function(e) {
	e.preventDefault()
	for (instance in CKEDITOR.instances) {
		CKEDITOR.instances[instance].updateElement();
	}
	$.post(api_url + "/privacypolicy", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});

$("#termsofuse").on("submit", function(e) {
	e.preventDefault()
	for (instance in CKEDITOR.instances) {
		CKEDITOR.instances[instance].updateElement();
	}
	$.post(api_url + "/termsofuse", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});


$("#cookie").on("submit", function(e) {
	e.preventDefault()
	for (instance in CKEDITOR.instances) {
		CKEDITOR.instances[instance].updateElement();
	}
	$.post(api_url + "/cookie", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});


$("#slider1").on("submit", function(e) {
	e.preventDefault();

	var formData = new FormData(this);

	$.ajax({
		url: api_url + "/homepagesliders",
		type: 'POST',
		data: formData,
		dataType: 'json',
		contentType: false,
		processData: false,
		success: function(response) {
			if (response.error) {
				Swal.fire({ icon: 'error', title: '!...', text: response.error });
			} else {
				Swal.fire({ icon: 'success', title: 'Congratulations...', text: response.success });
			}
		},
	});
});


$("#slider2").on("submit", function(e) {
	e.preventDefault();

	var formData = new FormData(this);

	$.ajax({
		url: api_url + "/homepagesliders2",
		type: 'POST',
		data: formData,
		dataType: 'json',
		contentType: false,
		processData: false,
		success: function(response) {
			if (response.error) {
				Swal.fire({ icon: 'error', title: '!...', text: response.error });
			} else {
				Swal.fire({ icon: 'success', title: 'Congratulations...', text: response.success });
			}
		},
	});
});


$("#slider3").on("submit", function(e) {
	e.preventDefault();

	var formData = new FormData(this);

	$.ajax({
		url: api_url + "/homepagesliders3",
		type: 'POST',
		data: formData,
		dataType: 'json',
		contentType: false,
		processData: false,
		success: function(response) {
			if (response.error) {
				Swal.fire({ icon: 'error', title: '!...', text: response.error });
			} else {
				Swal.fire({ icon: 'success', title: 'Congratulations...', text: response.success });
			}
		},
	});
});


$("#section1").on("submit", function(e) {
	e.preventDefault()
	
	$.post(api_url + "/homepageothers", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});


$("#section2").on("submit", function(e) {
	e.preventDefault()
	
	$.post(api_url + "/homepageothers2", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});


$("#section3").on("submit", function(e) {
	e.preventDefault()
	
	$.post(api_url + "/homepageothers3", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});


$("#about").on("submit", function(e) {
	e.preventDefault()

	for (instance in CKEDITOR.instances) {
		CKEDITOR.instances[instance].updateElement();
	}
	
	$.post(api_url + "/aboutpage", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});


$("#offering1").on("submit", function(e) {
	e.preventDefault()
	
	$.post(api_url + "/offering", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});

$("#offering2").on("submit", function(e) {
	e.preventDefault()
	
	$.post(api_url + "/offering2", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});

$("#offering3").on("submit", function(e) {
	e.preventDefault()
	
	$.post(api_url + "/offering3", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});



$("#classesedit").on("submit", function(e) {
	e.preventDefault()

	for (instance in CKEDITOR.instances) {
		CKEDITOR.instances[instance].updateElement();
	}
	
	$.post(api_url + "/classesedit", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})

			
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

			setTimeout(function () {
				window.location.href = site_url +  'admin/classeslist'; 
			}, 3000);

		}
	})
});


$("#category").on("submit", function(e) {
	e.preventDefault()
	
	$.post(api_url + "/addcategory", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})
			updateCategoryOptions(response.category_name);
		}
	})
});


function updateCategoryOptions(categoryName) {
	var selectElement = $("#validationDefault042");

	selectElement.append($('<option>', {
		value: categoryName,
		text: categoryName
	}));

	selectElement.val(categoryName);
}



$("#blogedit").on("submit", function(e) {
	e.preventDefault()

	for (instance in CKEDITOR.instances) {
		CKEDITOR.instances[instance].updateElement();
	}
	
	$.post(api_url + "/blogedit", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})
			setTimeout(function () {
				window.location.href = site_url +  'admin/bloglist'; 
			}, 3000);

		}
	})
});



$("#user_edit_profile").on("submit", function(e) {
	e.preventDefault()
	
	$.post(api_url + "/users", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});


$("#user_edit_pass").on("submit", function(e) {
	e.preventDefault()
	
	$.post(api_url + "/user-pass", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});

$("#user_edit_bio").on("submit", function(e) {
	e.preventDefault()
	
	$.post(api_url + "/user-bio", $(this).serialize(), null, "json").done(response => {
		//showLoader();
		if (response.error){
			//closeLoader();
			Swal.fire({icon: 'error', title: '!...', text: response.error})
		} else {
			//closeLoader();
			Swal.fire({icon: 'success', title: 'Congratulations...', text: response.success})

		}
	})
});


$("#darklight").on("click", function() {
	$.post(api_url + "/darklight", $(this).serialize(), null, "json").done(response => {
	})
});