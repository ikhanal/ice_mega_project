$(document).ready(function(){
	$('#sign_in_form').validate({
		rules:{
			email:{
				required: true,
				email: true
			},
			password:{
				required:true,
				minlength: 3
			}
		}
	});
	$('#sign_up_form').validate({
		rules:{
			yourname:{
				required: true,
				minlength: 2
			},
			email:{
				required: true,
				email: true
			},
			password:{
				required:true,
				minlength: 3
			}
		}
	});
	$('#create_homepag').validate({
		rules:{
			placename:{
				required: true
			},
			location:{
				required: true
			},
			description:{
				required: true,
				minlength: 10
			},
			catchphrase:{
				required: true
			}
		}
	});
	$('#blog_form').validate({
		rules:{
			topic:{
				required: true,
				minlength: 5
			},
			description:{
				required: true,
				minlength: 10
			}
		}
	});
});







