$(document).ready(function() {
	
	 var site_url = 'http://localhost/kantorpenjaminanmutu/userlist';
	 var site_urljurnal = 'http://localhost/kantorpenjaminanmutu/journal';
	 var site_urlproceding = 'http://localhost/kantorpenjaminanmutu/proceeding';
	 var site_data = 'http://localhost/kantorpenjaminanmutu/console/dataadminj';
	$('.listuser').click(function() {
		$('#content-load').load(site_url);
	});
	
	$('.jurnal').on("click", function() {
		$('#content-load').load(site_urljurnal);
	});

	$('.proceding').on("click", function() {
		$('#content-load').load(site_urlproceding);
	});
	$('.proceding').on("click", function() {
		$('#content-load').load(site_urlproceding);
	});
	$('.data-input').on("click", function(){
		$('#content-load').load(site_data);
		
	});
	
	var id=null;
	$('#btn-edit').click(function(){
		alert("alert sukses");
	});
	

	$('#modal_tambah').on('shown.bs.modal', function () {			
		$("#username").focusout(function(){
			check_username();
		});
		$("#name").focusout(function() {
			check_name();
		});
		$("#alias").focusout(function() {
			check_alias();
		});
		$("#email").focusout(function() {
			check_email();
		});
		$("#password").focusout(function() {
			check_password();
		});
		$("#passwordv").focusout(function() {
			check_passwordv();
		});
	});	

	$('#modal_edit').on('shown.bs.modal', function () {			
		$("#username").focusout(function(){
			check_username();
		});
		$("#name").focusout(function() {
			check_name();
		});
		$("#alias").focusout(function() {
			check_alias();
		});
		$("#email").focusout(function() {
			check_email();
		});
		$("#password").focusout(function() {
			check_password();
		});
		$("#passwordv").focusout(function() {
			check_passwordv();
		});

	});

	$("#usenamrname_error_message").hide();
	$("#name_error_message").hide();
	$("#alias_error_message").hide();
    $("#email_error_message").hide();
    $("#password_error_message").hide();
	$("#passwordv_error_message").hide();

	function check_username() {
		var username = $("#username").val();
		if (username !== '') {
			$("#username_error_message").hide();
				return true;
		} else {
			$("#username_error_message").html("wajib disi");
			$("#username_error_message").show();
			return false;			
		}
	}
	function check_name() {
		var pattern = /^[\sA-Za-z]*$/;
		var name = $("#name").val();
		if (name !== '') {
			if(pattern.test(name) ){
				$("#name_error_message").hide();
				return true;				
			}else{
				$("#name_error_message").html("Tidak boleh ada karakter special");
				$("#name_error_message").show();
				return false;			
			}
						
		} else {
			$("#name_error_message").html("Wajib Diisi");
			$("#name_error_message").show();
			return false;
						
						
		}
	}
	
	function check_alias() {
		var pattern = /^[\SA-Za-z\.]*$/;
		var alias = $("#alias").val();
		if (alias !== '') {
			if (pattern.test(alias)) {
				$("#alias_error_message").hide();
				return true;
			} else {
				$("#alias_error_message").html("Tidak boleh ada karakter special");
				$("#alias_error_message").show();
				return false;			
			}			
		} else {
			$("#alias_error_message").html("Wajib diisi");
			$("#alias_error_message").show();
			return false;	
		}
	}
	function check_password() {
		var password_length = $("#password").val().length;
		if (password_length < 8) {
			$("#password_error_message").html("Atleast 8 Characters");
			$("#password_error_message").show();
			return false;			
		} else {
			$("#password_error_message").hide();
			return true;
		}
	}
	
	function check_passwordv() {
		var password = $("#password").val();
		var passwordv = $("#passwordv").val();
		if (password !== passwordv) {
			$("#passwordv_error_message").html("Passwords Did not Matched");
			$("#passwordv_error_message").show();
			return false;	
		} else {
			$("#passwordv_error_message").hide();
			return true;
		}
	}
	function check_email() {
		var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var email = $("#email").val();
		if (email !== '') {
			if(pattern.test(email)){
				$("#email_error_message").hide();
				return true;
			}else{
				$("#email_error_message").html("Wajib di isi");
				$("#email_error_message").show();
				return false;
			}
		} else {
			$("#email_error_message").html("Wajib di isi");
			$("#email_error_message").show();
			return false;
		}
	}
});


	
