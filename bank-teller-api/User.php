<?php
require "Connect.php";

class User {
	public $conn;
	
							
    public function __construct($conn){/*must be instantiate outside the class*/
    	$this->conn= $conn;
    	
    }
    public function getBalance(){
    	$query = "SELECT Balance FROM user WHERE ID=1";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query)){
            echo "Failed";
        }
        else{   
            msqli_stmt_bind_param($stmt,s,$data);
        }
    	$result = mysqli_query($this->conn,$query);
    	$row =mysqli_fetch_assoc($result);
        $jbal= $row['Balance'];
        return $jbal;
    	
    }
    public function getUser(){
        $query ="SELECT ID,Name FROM user WHERE ID =1";
        $result =mysqli_query($this->conn,$query);
        $juser= array();
        while ($row = mysqli_fetch_assoc($result))
        {
            $juser[]=$row;
        }
        return $juser;

    }
    public function depoBalance($depo){
        //get post
        //get balance
        //add 
        //update balance
            $query1 =" SELECT Balance From user WHERE ID =1 ";
            $select =mysqli_query($this->conn,$query1);
            $row =mysqli_fetch_assoc($select);
            $latest = $row['Balance'] + $depo ;
            $query2 =" UPDATE user SET Balance = '$latest' WHERE ID = 1 ";
            $update = mysqli_query($this->conn,$query2);
            return $update;
    }
    public function withBalance($with){
        //get post
        //get balance
        //subtract
        //update balance
        $query1 ="SELECT Balance FROM user WHERE ID =1";
        $select =mysqli_query($this->conn,$query1);
        $row= mysqli_fetch_assoc($select);
        $latest = $row['Balance'] -$with ;
        $arr=[ (object)["message"=>"Success","status"=>"200 ok"],
                (object)["message"=>"Not enough balance","status"=>"406 error"]
            ];
        if ($latest < 0)
        {
            echo json_encode($arr[1]);
            die();
        }
        else{
        $query2 ="UPDATE user SET Balance = '$latest' WHERE ID = 1";
        $update =mysqli_query($this->conn,$query2);
        return $update;
        }

    }
    public function changePass($pass)
    {
        $query1 = "SELECT Password FROM user WHERE ID =1";
        $result = mysqli_query($this->conn,$query1);
        $row = mysqli_fetch_assoc($result);
         $arr=[ (object)["message"=>"Must not be the same value!","status"=>"406 error"],
                (object)["message"=>"Must fill the field.","status"=>"406 error"],
                (object)["message"=>"Password must only be 4-12 character long.","status"=>"406 error"]

            ];



        if ($row['Password'] == $pass)
        {
            echo json_encode($arr[0]);
            die();
        }

        elseif (strlen($pass) > 12 || strlen($pass) <= 3)
        {
            echo json_encode($arr[2]);
            die();
            
        }
        else
        {
            $query2 = "UPDATE user SET Password = '$pass' WHERE ID = 1" ;
            $update =mysqli_query($this->conn,$query2);
            return $update;
        }

    }
    
}
$user = new User($conn);




















/*class User()
{
 	public $conn;
 	public $name;
 	public $password;
 	function __construct ($conn)
 	{
 		$this->conn = $conn;
 		$this->name = "Hello" . " World";
 	}
	function displayBalance(){
		$query ="SELECT * FROM `user` WHERE 1";
		$result = mysqli_query($this->conn,$query);
		return false;
	} 	
}
$user = new User($conn);
var_dump($user->displayBalance());
*/

