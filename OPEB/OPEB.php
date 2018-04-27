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

<form method="post" action="#">
		<p>Enter ur name to login:...</p>
		Name:<br>
		<input type="text" name="name" value="" required><br>
		Password:<br>
		<input type="password" name="password1" value="" required><br><br>
			<button name="submit"type="submit">Login</a></button><br>
	</form>
  <br>
	If You are a new member please Click on Register..
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
	if(isset($_POST['submit']))
	{
		$Name1=$_POST['name'];
		$password=$_POST['password1'];
$sql = "SELECT * FROM registerb where Name='$Name1' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
                echo "id: " . $row["Email"]. " Name: " . $row["Name"] . "  Ur Billno is:".$row["BillNo"];

    }
} else {
    echo "0 results Wrongpassword or id";
}
	}
$conn->close();
?>