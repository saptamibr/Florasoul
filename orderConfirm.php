<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<title> Success Confirmation</title>
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

	.modal-confirm .icon-box i {
		font-size: 58px;
		position: relative;
		top: 3px;
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
	   $email = $_POST["email"];
   
	   $address = $_POST["address"];
	   $pincode = $_POST["pincode"];
	   $number1 = $_POST["number1"];
	   $db = mysqli_connect("localhost","root","admin","florasouldb");
	   $query = "INSERT INTO orders(plantName,address,pincode,email,number) VALUES ('$plantName','$address','$pincode','$email',$number1);";
	   mysqli_query($db,$query);

	echo '
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
						
				<h4 class="modal-title">Awesome!😍</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your booking has been confirmed.  Your order will reach you soon.🥰 </p>
			</div>
			<div class="modal-footer">
			<a href="index.html"><button class="btn btn-success btn-block" data-dismiss="modal">OK</button></a>
			</div>
		</div>
	</div>  '
	
?>


</body>
</html>   