<?php
include("../control/process.php");
?>
<html>
<head>
    <title> My Home </title>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
   
   </head>    
<body>
   

<h1 id="heading"> Registration </h1>
<h1 id="subheading"> please fill all info </h1>

<form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <table>
        <tr>
    <td> <p id="label"> Name </p> </td>
   <td> <input type="text" name="name" id="name" onkeyup="checkName()"  placeholder="enter your name" > </td>
   <td> <p id="error"> <?php echo $nameError; ?> </p> </td>
</tr>
<tr>   <td> <p id="label"> Age </p> </td>
 <td>   <input type="number" name="age"></td>
</tr>
<tr>
   <td> Gender </td>
</tr>
<tr>
<td> Male <input type="radio" name="gender" value="male"> </td>
<td> Female <input type="radio" name="gender" value="female"> </td>
</tr>

<tr>
   <td> Profession </td>
</tr>
<tr>
<td> Doctor <input type="checkbox" name="doctor" value="doctor"> </td>
<td> Engineer <input type="checkbox" name="engineer" value="engineer"> 
 Bank Execuitives <input type="checkbox" name="execuitives" value="execuitives"> </td>
</tr>
<tr>
   <td> <input type="file" name="myfile"> </td>
</tr>

<tr><td><input type="submit" name="enter" class="shape submit"></td></tr>
<tr><td><input type="reset" name="reset" class="shape reset"></td></tr>

</table>

</form>

<a href="../view/login.php"> Go to Login page </a>

<script src="../js/myscript.js"></script>
</body>

</html>
