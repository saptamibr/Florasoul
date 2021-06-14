<html>
    <head>
        <title></title>
    </head>
    <style>
         th, td { 
            border:1px solid black;
            font-weight: bold;
            font-size: 17px;
            }
        
        label{
            font-size: 20px;
        }

        th.hd{
            background:#4d94ff;
        }
    </style>
<body style = "background-color: 66a3ff;">



<table border="10" width="100%" bgcolor="cce0ff" style="color:black">
<?php  
    $db = mysqli_connect("localhost","root","admin","florasouldb");	
	$query = "SELECT * FROM orders;";
    $result = mysqli_query($db,$query);
    
    echo '
    <tr>
        <th class="hd">ID</th>
        <th class="hd">Plant name</th>
        <th class="hd">Address</th>
        <th class="hd">Pincode</th>
        <th class="hd">Date</th>
        <th class="hd">Email</th>
        <th class="hd">Contact No.</th>
        </tr>
    ';

    while($row = mysqli_fetch_array($result)){
        echo '
        <tr>
		<th>'.$row['id'].'</th>
        <th>'.$row['plantName'].'</th>
        <th>'.$row['address'].'</th>
        <th>'.$row['pincode'].'</th>
        <th>'.$row['date'].'</th>
        <th>'.$row['email'].'</th>
        <th>'.$row['number'].'</th>
    </tr>
        ';
    } 
?>
    </table>
    <br><br>
    <center>
    <form action="passwordCheck.php">
    <label><b>Click here to add the details  :  &nbsp &nbsp  &nbsp  &nbsp   &nbsp  </b></label>
        <button type="submit"  style="background-color:blue;color:white;width:200px;height:40px;font-size:17px;">ADD</button>
    </form> 
    <form action="delete.php" method="post">
        <label><b>Enter ID of details which need to be Deleted :</b></label>
        <input type="text" style="width:75px;height:40px;" class="form-control" name= "id" required>	
        <button type="submit"  style="background-color:red;color:white;width:200px;height:40px;font-size:17px;">DELETE</button>
    </form>
    </center>
</body>
</html>