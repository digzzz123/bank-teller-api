<?php
include "../../User.php";


$juser = $user->getUser();
echo json_encode($juser);





/*	// save to db
if(isset($_POST['ID'])){
 		$results=mysqli_query($conn,$query);
$juser =array();
while($holder = mysqli_fetch_assoc($results))
{
	$juser[]=$holder;
}
echo json_encode($juser);
	}

*/

