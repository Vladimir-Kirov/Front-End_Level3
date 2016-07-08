<!DOCTYPE html>
<html>
	<head>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<title>jQuery</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="script/formJQuery.js"></script>
			<link rel="stylesheet" type="text/css" href="styles/formStyle.css">
			<script type="text/javascript">
			$(document).ready(function () {
				$("#submit").click(function () {
					var name = $("#name").val();
					var email = $("#email").val();
					var email = $("#password").val();
					var comment = $("#comment").val();
					// console.log(name, email, password, comment);

					$("<img src='img/ajax-loader.gif' id='loading' alt='loading' />").appendTo("#result");
					$.ajax({
					  url: "post_email.php",
					  method: "POST",
					  data: "name=" + name + "&email=" + email + "&comment=" + comment, 
					  /*data: { myName: name, myEmail: email, MyComment: comment }
					    })*/
					  success: function(result) {
					  	// console.log(result);
					  	$("#result").hide().html(result).fadeIn("slow");

					  }
					  	/*.done(function( msg ) {
	              			alert( "Data Saved: " + msg );*/
					
					});

					return false;
				});
			});
			</script>
	</head>
	<body>
		<div id="wrap">
				<a href="http://google.com" id="new_comment" class="btn btn-warning btn-lg active ">
					Registration Form <span class="glyphicon glyphicon-circle-arrow-down"></span>
				</a> 
				<a href="#" id="cancel_comment" style="display: none" class="btn btn-warning btn-lg active ">
					Cancel <span class="glyphicon glyphicon-circle-arrow-up"></span>
				</a>
			
				<div id="stylized" class="myform">
					<form id="form" name="form" method="POST" action="post_email.php">
						<h1>Sign-up form</h1>
						<p>This is the basic look of my form without table</p>

						<label>Name
							<span class="small">Add your name</span>
						</label>
						<input type="text" name="name" id="name" />

						<label>Email
							<span class="small">Add a valid address</span>
						</label>
						<input type="text" name="email" id="email" />
						
						<label>Password
							<span class="small">Min size 6 chars</span>
						</label>
						<input type="password" name="password" id="password" />

						<label>Your comment!
							<span class="small">What's on your mind?</span>
						</label>
						<textarea name="comment" id="comment"></textarea>

						<label>Are you agree with conditions?
							<span class="small">Yes, of course.</span>
						</label>
						<input type="checkbox" id="agree" />
						<button type="submit" id="submit" disabled="disabled">Sign-up</button>
						<div class="spacer"></div>
						<div id="result">
							
						</div>
					</form>
				</div>
		</div>
	</body>
</html>


