<?php
include("../model/db.php");
$hasError=0;
$nameError="";
$image="";
if(isset($_REQUEST["enter"]))
{
if(empty($_FILES["myfile"]["name"]))
{
    echo "no file uploded";
}
else
{
    echo "your file name is ".$_FILES["myfile"]["name"];
move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/".$_REQUEST["name"].".jpg");
$image= "../uploads/".$_REQUEST["name"].".jpg";
}

    if(empty($_REQUEST["name"]))
    {
        $nameError= "name is required";
        $hasError=1;
    }else
    {
        $nameError= "your name is ".$_REQUEST["name"];
    }
    if(strlen($_REQUEST["name"])<5)
    {
        $nameError= "name is can not be less than 5 chars";
        $hasError=1;
    }else
    {
        $nameError= "your name is ".$_REQUEST["name"];
    }

echo "<br>";
echo $_REQUEST["age"];
if(isset($_REQUEST["gender"]))
{
    echo $_REQUEST["gender"];
}
else
{
    echo "no radio selected";
    $hasError=1;
}
$profession="";
if(isset($_REQUEST["doctor"]) || isset($_REQUEST["engineer"]) || isset($_REQUEST["execuitives"]) )
{
    if(isset($_REQUEST["doctor"]))
    {
        echo $_REQUEST["doctor"];
        $profession=$_REQUEST["doctor"];
    }
    if(isset($_REQUEST["engineer"]))
    {
        echo $_REQUEST["engineer"];
        $profession.=$_REQUEST["engineer"];
    }
    if(isset($_REQUEST["execuitives"]))
    {
        echo $_REQUEST["execuitives"];
        $profession.=$_REQUEST["execuitives"];
    }

}
else
{
    echo "checkbox is required";
    $hasError=1;
}

if($hasError==0)
{

$db=new mydb();
$conobj=$db->openCon();
$result=$db->insertUser($conobj,"user", $_REQUEST["name"], $_REQUEST["age"], $_REQUEST["gender"],
$profession,$image);
if($result==true)
{
    echo "data inserted";
}
else
{
    echo "error".$conobj->error;
}


}



// $existingdata=file_get_contents("../data/data.json");
// $existingdatainphp=json_decode($existingdata);

//     $myarr= array(
//         "Name"=>$_REQUEST["name"],
//         "Age"=>$_REQUEST["age"],
//         "Gender"=>$_REQUEST["gender"],
//         "Image"=>"../uploads/".$_REQUEST["name"].".jpg"
//     );
//     $existingdatainphp[]= $myarr;
//    $myjsonobj= json_encode($existingdatainphp,JSON_PRETTY_PRINT);
//    file_put_contents("../data/data.json",$myjsonobj);

// $mydata=file_get_contents("../data/data.json");
// $myphpdata=json_decode($mydata);
// echo "<br>print from json : ".$myphpdata[0]->Name;
// echo "<br>print from json : ".$myphpdata[0]->Age;
// echo "<img src='".$myphpdata[3]->Image."'>";
// }



}
?>