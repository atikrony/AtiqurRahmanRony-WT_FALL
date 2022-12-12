<?php
$username = $password = "";
// username validation
if(empty($_REQUEST["username"]) || strlen($_REQUEST["username"])<8)
{
    $username= "you must enter username";
    $is_validate = false;
}



// password validation

if(empty($_REQUEST["password"]) || strlen($_REQUEST["password"])<8)
{
    $password= "you must enter password";
    $is_validate = false;
}
else

if(file_exists('../data/data.json'))
{
	$filename = '../data/data.json';
	$data = file_get_contents($filename) ; 
    
	$users = json_decode($data);  
   
    session_start();
     //set the users session
    $_SESSION['user'] = $users;
    header("Location: ../Reletedview/afterlogin.php");
    
	 $message = "<h3 class='text-success'>JSON file data</h3>";
}
else
{
	 $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}

?>