

<html>
<head>
<title>Online Payment Of Electric Bill..</title>
<style>
ul {
	margin:0px;
    list-style-type: none;
    margin:0;
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
<form method="post" action="#">
  BillNO.:<br>
  <input type="text" name="BillNo" value="">
  <br>
  



<h1>Calculate your BILL</h1>

<p1>Enter units consumed:</p1>
<input type='text'  name="NU" id="txt2"/><br><br>



<button type="submit" name="Submit" onclick="myEmi()" >Calculate Bill</button><br><br>
<input type="submit" name="showdetails" value="showdetails"><br><br>

</form>
<p1>Calculate Bill :</p1>
<p1 id="demo1"></p1><br><br>

<script>
function myEmi() {
var p,r,n,m,a,b,c,d,e;
n=parseFloat(document.getElementById("txt2").value);


m=3*n;
document.getElementById("demo1").innerHTML = m;
}
</script>


<hr>


  Already have an account click here to<a href="OPEB.php"> Sign In</a>
</div>
</body>
</html>

<?php
	$servername="LocalHost";
	$username="root";
	$password="";
	$dbname="calc";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	else 
		echo "connected successfully <br>";
	if(isset($_POST['Submit']))
	{
		$Nu=$_POST['NU'];
		
		$billno=$_POST['BillNo'];
		
		$sql="insert into calc values ('$billno','$Nu')";
		if ($conn->query($sql) === TRUE) {
				echo "data inserted ";
			} 	
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	if(isset($_POST['showdetails']))
	{
		$billno=$_POST['BillNo'];
		
$sql = "SELECT * FROM calc where BillNo='$billno' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
                echo "BillNo: " . $row["BillNo"]. " Amount u have to pay: " . $row["NU"] ;

    }
} else {
    echo "0 results Wrongpassword or id";
}
	}
?>