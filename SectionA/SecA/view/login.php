<?php
include ("../control/logincontrol.php");
?>
<html>
<head>
    <title> Login page </title>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>    
<body>
<div class="myDiv">
<h1> Login </h1>
</div>


<form action="" method="post">
    <table>
        <tr>
    <td> Name </td>
   <td> <input type="text" name="name" placeholder="enter your name"> </td>
  
</tr>
<tr>   <td> Age </td>
 <td>   <input type="number" name="age"></td>
</tr>
<tr>
  
<tr><td><input type="submit" name="enter" class="shape submit"></td></tr>


</table>

</form>