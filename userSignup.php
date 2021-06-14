<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Signup Confirmation</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-confirm {		
		color: #636363;
		width: 325px;
		margin: 30px auto;
	}
	.modal-confirm .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-confirm .modal-header {
		border-bottom: none;   
        position: relative;
	}
	.modal-confirm h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-confirm .form-control, .modal-confirm .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-confirm .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-confirm .modal-footer {
		border: none;
		text-align: center;
		border-radius: 5px;
		font-size: 13px;
	}	

	.modal-confirm.modal-dialog {
		margin-top: 80px;
	}
    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
		background: #82ce34;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-confirm .btn:hover, .modal-confirm .btn:focus {
		background: #6fb32b;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
</head>
<body>

<?php
	$plantName = $_POST["plantName"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

	$db = mysqli_connect("localhost","root","admin","florasouldb");
	
	$query = "SELECT email FROM users WHERE email='$email';";
	$result = mysqli_query($db,$query);
	$row = mysqli_fetch_array($result);
	
	if(empty($row)){
		$query = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password');";
		mysqli_query($db,$query);
		
		echo '
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Success!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your account created</p>
			</div>
			<div class="modal-footer">

			<form action="address.php" method="post">
            <input name="plantName" type="hidden" value='.$plantName.'>  
            <input name="email" type="hidden" value='.$email.'>  
			<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</form>
			
			</div>
		</div>
    </div>  ';
	}
	else{
		echo '
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
					
				<h4 class="modal-title">Oops!! 😅</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Account already exists!! Try login.</p>
			</div>
			<div class="modal-footer">

			<form action="login.php" method="post">
            <input name="plantName" type="hidden" value='.$plantName.'>  
			<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</form>
			
			</div>
		</div>
    </div>  ';
	}
    
?>