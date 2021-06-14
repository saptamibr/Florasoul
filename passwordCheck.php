<html>
    <head>
    <title>Check</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    }</style>

    </head>
    <body>
    <?php
    //  $plantName = $_POST["plantName"];
	// $email = $_POST["email"];
	// $address = $_POST["address"];
	// $pincode = $_POST["pincode"];
	//  $number1 = $_POST["number1"];
    $db = mysqli_connect("localhost","root","admin","florasouldb");

    
    echo'
    <br><br>
    <center>
    <div class="contact-form">
    <div class="form-group">
    <form action="add.php" method="post">
        
        <label style="font-size:30px";><b>Enter the admin password :</b></label>
        <input type="text" style="width:100px;height:40px;" class="form-control" name= "pwd" required>	
        <br>
        <button type="submit" style="width:120px;height:40px;font-size=30px;background-color:green;color:white;" >Check</button>
    </form>
    </center>
    </div>
    </div>

    
    </body>
</html>';
?>
</body>
</html>