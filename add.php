<html>
    <head>
        <title>Add</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<style>
		html, body {
		min-height: 100%;
		}

		body {
        background: #66a3ff;
        font-family: "Varela Round", sans-serif;
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

	.contact-form .form-group {
		margin-bottom: 20px;
	}

	.contact-form .form-control, .contact-form .btn  {        
        border-radius: 2px;
		min-height: 40px;
		transition: all 0.5s;
		outline: none;
    }

	input[type=text], textarea{
		margin-left: 10px;
	}
	.contact-form .btn {
        background: #a177ff;
		font-size: 17px;
		min-height: 50px;
		border: none;
		color:white;
		width:200px;
		height:40px;
    }

	.contact-form .btn:hover, .contact-form .btn:focus {
        background: #8048ff;
		outline: none;
    }

	.contact-form textarea {
        resize: vertical;
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
	$pwd = $_POST["pwd"];

	if($pwd == "admin")
	{
		echo'
		<br><br>
		
    <div class="contact-form">
	<form action="insertOrder.php" method="post">
		<div class="form-group">
		<div class="form-group">
			<label>Plant Name &nbsp &nbsp</label>
			<input type="text" class="form-control" name= "plantName" placeholder="Plant name" required>	
        </div>
		<div class="form-group">
			<label>Email Address</label>
			<input type="text" class="form-control" name= "email" placeholder="Email" required>	
		</div>
			<label>Detail Address</label>
			<textarea class="form-control" name="address" rows="5" required></textarea>
		</div>
		<div class="form-group">
			<label>Pincode  &nbsp &nbsp &nbsp &nbsp &nbsp</label>
			<input type="text" class="form-control" name= "pincode" placeholder="Pincode" required>	
		</div>

		<div class="form-group">
			<label>Contact No. &nbsp &nbsp </label>
			<input type="text" class="form-control" name= "number1" placeholder="##########" required>	
		</div>
<center>
		<button type="submit" class="btn btn-primary btn-block">Add</button></center>
	</form>
</div> ';
	}

	else{
		echo '
		<div class="modal-dialog modal-confirm">
			<div class="modal-content">
				<div class="modal-header">			
					<h4 class="modal-title">Sorry!! ☹ </h4>	
				</div>
				<div class="modal-body">
					<p class="text-center">Wrong Password</p>
				</div>
				<div class="modal-footer">
	
				<a href="admin.php"><button class="btn btn-success btn-block" data-dismiss="modal">OK</button></a>
	
				</div>
				
			</div>
		</div>  ';

	}
	?>
    </body>
</html>