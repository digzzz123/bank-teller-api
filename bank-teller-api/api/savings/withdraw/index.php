<?php
require "../../../User.php";

$result=$user->withBalance($_POST['withdraw']);
$arr=[ (object)["message"=>"Success","status"=>"200 ok"],
 		(object)["message"=>"Failed","status"=>"406 error"]];
if($result == true){
    echo json_encode($arr[0]);
}
else{
    echo json_encode($arr[1]);
}




















/*$with= $_POST['withdraw'];
$query= "SELECT Balance FROM user WHERE ID =1";
$select =mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($select);

$latest = $row['Balance'] - $with;
 
$query2 ="UPDATE user SET Balance ='$latest' WHERE ID = 1";
$update = mysqli_query($conn,$query2);
$arr=[
	(object)['message'=>'Success','status'=> '200 ok'],
	(object)['message'=>'Success','status'=> '406 error'],
 	];
if ($update == true)
{
	echo json_encode($arr[0]);
}
else{
	echo json_encode($arr[1]);
}*/


