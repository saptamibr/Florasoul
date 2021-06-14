<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Adress</title>
<style>
	html, body {
		min-height: 100%;
	}
    body {
        background: #66a3ff;
    }
	.form-control {
		border-color: #d7d7d7;
		box-shadow: none;
		width: 300px
	}
	.form-control:focus, .btn:focus {
		border-color: #a177ff;
		box-shadow: 0 0 8px #c2a8ff;
	}
    .contact-form {
		width: 500px;   
        margin: 0 auto;
        padding: 40px 0;
    }
    .contact-form form {
        background: #fff;
        padding: 40px;
        border-radius: 6px;
    }
    .contact-form h1 {
		text-align: center;
		font-size: 50px;
        margin: 0 0 15px;
    }
	.contact-form .form-group {
		margin-bottom: 20px;
	}
    .contact-form .form-control, .contact-form .btn  {        
        border-radius: 2px;
		min-height: 40px;
		transition: all 0.5s;
		outline: none;
    }
    .contact-form .btn {
        background: #a177ff;
		font-size: 16px;
		min-height: 50px;
		border: none;
    }
    .contact-form .btn:hover, .contact-form .btn:focus {
        background: #8048ff;
		outline: none;
    }

    .contact-form label {
		font-weight: bold;
    }
    .contact-form textarea {
        resize: vertical;

    }
    .hint-text {
        font-size: 15px;
		text-align: center;
        padding-bottom: 25px;
        opacity: 0.8;
    }
</style>
</head>
<body>

<?php
	$plantName = $_POST["plantName"];
	$email = $_POST["email"];

	echo '
	<div class="contact-form">
	<form action="orderConfirm.php" method="post">
		<div class="form-group">
		<input name="plantName" type="hidden" value='.$plantName.'>
		<input name="email" type="hidden" value='.$email.'> 
			<label>Address &nbsp</label>
			<textarea class="form-control" name="address" rows="5" required></textarea>
		</div>
		<div class="form-group">
			<label>Pincode &nbsp</label>
			<input type="text" class="form-control" name= "pincode" required>	
		</div>

		<div class="form-group">
			<label>Contact &nbsp</label>
			<input type="text" class="form-control" name= "number1" required>	
		</div>
		<center>
		<button type="submit" class="btn btn-primary btn-block"><b>Confirm address</b></button></center>
	</form>
</div>
	'
	?>

</body>
</html>