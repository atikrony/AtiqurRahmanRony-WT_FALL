<?php
class mydb{

    function openCon(){
$conn=new mysqli("localhost","root","","seca");
return $conn;
    }

    function insertUser($conn,$tablename, $name, $age, $gender,$profession,$image)
    {
$sqlstr="INSERT INTO $tablename (Name,Age,gender,profession,image) VALUES
 ('$name',$age,'$gender','SELECT * FROM $tablename','$image' )";
return $conn->query($sqlstr);
    }

function checkLogin($conn,$tablename,$name, $age)
{
    $sql="SELECT * FROM $tablename WHERE name='$name' AND age='$age'";
   return $conn->query($sql);
}
function showUser($conn,$tablename,$name)
{
    $sql="SELECT * FROM $tablename WHERE name='$name'";
    return $conn->query($sql);
}

function showAll($conn,$tablename)
{
    $sql="SELECT * FROM $tablename";
    return $conn->query($sql);
}
function updateUser($conn,$tablename,$name,$age,$gender,$prof,$image,$id)
{
    $sql="UPDATE $tablename SET Name='$name', Age='$age',gender='$gender', profession='$prof',
    image='$image' WHERE id='$id'    ";
     return $conn->query($sql);
}



    function closeCon($conn)
    {
$conn->close();
    }

}
?>