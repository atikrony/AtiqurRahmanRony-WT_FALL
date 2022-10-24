<?php
$validatename = $validateemail = $validatecheckbox = $validateradio= $dob = ""; 
$currentDate=date("Y-m-d");
$name = $email = $gender = $id= $number = "" ;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["fname"];
    $email=$_REQUEST["email"];
    //name validation
    if(empty($_REQUEST["fname"]) ||  !preg_match("/^[A-Za-z]+$/",$name))
    {
        $validatename= "you must enter name";

    }
    else
    {
        $name=$_REQUEST["fname"];
    }
    //email validation
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $validateemail= "you must enter email";
    }
    else
    {
        $email=$_REQUEST["email"];
    }  
    //gender validation
    if(isset($_REQUEST["gender"]))
    {
        $validateradio= $_REQUEST["gender"];
    }
    else{
        $validateradio= "please select at least one radio";
    }

    //date of birth validation
    $dob = $_REQUEST["birthday"];
    if ($dob>$currentDate) {
        $dob = " dob is not valid"; 
    } else {
        $dob= date_create($dob);
        $currentDate=date_create($currentDate);
        $dateDiff=date_diff($dob,$currentDate);
        $age = $dateDiff->format("%y");
        if ($age<18) {
            $dob = "you are not eligible";
        } else {
            $dob = "your age is ".$age;
        }
    }

    //ID validation
   //preg-m this formate 19-41680-3
    if(empty($_REQUEST["id"]) || !preg_match("/^[0-9]{2}-[0-9]{5}-[0-9]{1}$/",$_REQUEST["id"]))
    {
        $id= "you must enter ID";
    }
    else
    {
        $id=$_REQUEST["id"];
    }

    //number validation
    //perg-m this formate 01******** 
    if(empty($_REQUEST["number"]) || !preg_match("/^01[0-9]{9}$/",$_REQUEST["number"]))
    {
        $number= "you must enter number";
    }
    else
    {
        $number=$_REQUEST["number"];
    }
    
}

?>