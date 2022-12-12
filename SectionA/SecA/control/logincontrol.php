<?php
include("../model/db.php");
session_start();
$loginerror=0;
if(isset($_REQUEST["enter"]))
{
    $name=$_REQUEST["name"];
    $age=$_REQUEST["age"];

$mydb=new mydb();
$conobj=$mydb->openCon();
$result=$mydb->checkLogin($conobj,"user",$name,$age);

if($result->num_rows >0)
{
    $_SESSION["name"]=$name;
     header("Location: ../view/profile.php");
}
else
{
    echo "user not exists";
}



// $myjsondata=file_get_contents("../data/data.json");
// $myphpdata=json_decode($myjsondata);

// foreach($myphpdata as $myobject)
// {

//    if($name== $myobject->Name && $age== $myobject->Age)

//    {
//     $_SESSION["name"]=$name;
//    header("Location: ../view/profile.php");
//    }
//    else
//    {
//     $loginerror=1;
//    }
// }
// if($loginerror==1)
// {
//     echo "user not exists";
// }


}



?>