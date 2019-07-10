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


























/*3*/
