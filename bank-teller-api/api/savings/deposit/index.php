<?php
require "../../../User.php";

$result = $user->depoBalance($_POST['deposit']);
$arr=[ (object)["message"=>"Success","status"=>"200 ok"],
 		(object)["message"=>"Failed","status"=>"406 error"]];
if($result == true){
    echo json_encode($arr[0]);
}
else{
    echo json_encode($arr[1]);
}


























/*if(isset($_POST['deposit']));
{
	$depo =$_POST['deposit'];

$query1 =" SELECT Balance From user WHERE ID =1 ";
$select =mysqli_query($conn,$query1);
$row =mysqli_fetch_assoc($select);

$latest = $row['Balance'] + $depo ;

$query2 =" UPDATE user SET Balance = '$latest' WHERE ID = 1 ";
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
}
}*/
