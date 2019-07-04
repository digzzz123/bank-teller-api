<?php
require "../../../../User.php";

$result = $user->changePass($_POST['password']);
$arr=[ (object)["message"=>"Success","status"=>"200 ok"],
 		(object)["message"=>"Failed","status"=>"406 error"]];
if($result == true){
    echo json_encode($arr[0]);
}
else{
    echo json_encode($arr[1]);
}



















/*$pass = $_POST['password'];
$query ="UPDATE user SET Password = '$pass'";
$result =mysqli_query($conn,$query);

$arr=[
	(object)['message'=>'Success','status'=> '200 ok'],
	(object)['message'=>'Success','status'=> '406 error'],
 	];


if ($result == true)
{
	echo json_encode($arr[0]);
}
else{
	echo json_encode($arr[1]);
}*/