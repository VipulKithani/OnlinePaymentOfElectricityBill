<html>
<head>
<title>Online Payment Of Electric Bill..</title>
<style>
ul {
    list-style-type: none;
    margin-bottom:0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
	
	
}

li a {
	
    display: block;
    color: orange;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
div{
	margin: 340px 150px 100px 20px;

	}
	p{background-color:orange;}
body
	{
		background-image:url("http://archive.is/6c4Cf/c01aa8b10b63d2450f45df399155eab57f1261c8.jpg");
		background-repeat:no-repeat;
		background-attachment:fixed;
	}
</head>
</style>
<body>
<div>
<ul>
  <li><a class="active" href="OPEB.php">Home</a></li>
  <li><a href="RegisterP.php">Register</a></li>
  <li><a href="CalculateBill.php">Calculate Bill</a></li>
  <li><a href="#about">About</a></li>
</ul>
<br><hr>
<p>Enter ur name to register:...</p>
<form method="post" action="#">
			<label> Sign Up Form..!</label><br>
			Name:<br>
			<input type="text" name="name" placeholder="Enter ur Name" required /><br>
			Email:<br>
			<input type="text" name="Email" placeholder="Enter ur Email"required/><br>
			Password:<br>
			<input type="Password" name="Password1" placeholder="Enter ur Password" required/><br>
			Confirm-Password:<br>
			<input type="Password" name="Password2" placeholder="Enter ur Password Again.."  required/><br>
			BillNo:<br>
			<input type="text" name="BillNo" placeholder="Enter ur bill number" required/><br>
		
			<input type="Submit" name="Submit"/><br>
			
		</form>
  Already have an account click here to<a href="OPEB.php"> Sign In</a>
</div>
</body>
</html>
<?php
	$servername="LocalHost";
	$username="root";
	$password="";
	$dbname="registerb";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	else 
		echo "connected successfully <br>";
	if(isset($_POST['Submit']))
	{
		$name=$_POST['name'];
		$Email=$_POST['Email'];
		$Password=$_POST['Password1'];
		$ConfirmPassword=$_POST['Password2'];
		$BillNo=$_POST['BillNo'];
		
		$sql="insert into RegisterB values ('$name','$Email','$Password','$ConfirmPassword','$BillNo')";
		if ($conn->query($sql) === TRUE) {
				echo "data inserted ";
			} 	
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
?>

