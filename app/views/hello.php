<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-	">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="/css/main.css">
		<script src="/js/main.js"> </script>
		<title>Perk.com</title>	
	</head>

	<body style="background-image: url(https://cdn2.perk.com/assets/perk2k16/images/hero-1.jpg);">
		<div class="welcome" style="margin-top:1%; margin-bottom:1%">
			<center><a href="http://Perk.com" title="Laravel PHP Framework"><img src="https://www.perk.com/favicon.png" alt="Perk"></a>
		</div>
		<div class ="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div style="font-family:sans-serif; font-size:20px; text-align:center; color:#fff;">Perk brings together the interests of consumers, developers, publishers, and advertisers. </div>
					<center> <div class="spin" style="margin-top:5%"></div> <span class="wait" style="color:white; display:none;">  Please wait.. </span> </center>
					<div id="message_success" class="alert alert-success" style="margin-top:2%; display:none;">
							<center><strong>Form Successfully Submitted</strong></center>
					</div>			
					<form id="form" role="form"  style="margin-top:10%;">
							<div class="form-group">
							<label for="first_name">FIRST NAME</label>
							<input id="first_name" type="text" class="form-control" id="first_name" required>
							</div>
							<div class="form-group">
							<label for="last_name">LAST NAME</label>
							<input type="text" class="form-control" id="last_name" required>
							</div>
							<div class="form-group">
							<label for="last_name">EMAIL</label>
							<input type="email" class="form-control" id="email" required>
							</div>
						<button id="submit_btn" type="submit" class="btn btn-default" style="margin-left:45%; margin-right:50%; background-color:#69d06e; color:White;">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
