<?php
$server	= "localhost";
$username ="root";
$password ="";
$dbname ="bank-teller";
$conn = new mysqli($server,$username,$password,$dbname);


/*$query ="SELECT * FROM `user` WHERE 1";
$result = mysqli_query($conn,$query);


while ($row = mysqli_fetch_array($result))
{
	echo $row['Balance'];
}*/