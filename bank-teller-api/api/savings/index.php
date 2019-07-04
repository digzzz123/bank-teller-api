<?php
require "../../User.php";


$bal = $user->getBalance();

 $arr=[ (object)[$bal,"message"=>"Success","status"=>"200 ok"],
 		(object)["message"=>"Failed","status"=>"406 error"]];
 if($bal == true){
 	echo json_encode($arr[0]);
 }
 elseif ($bal == false){
 	echo json_encode($arr[1]);
 }