<?php
include ("../control/updateprofilecontrol.php");
?>

<html>
<head>
    <title> My Home </title>
</head>    
<body>
<h1> Update </h1>
<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr><td>ID:<?php echo $id; ?> </td></tr>
        <tr>
    <td> Name </td>
   <td> <input type="text" name="name" value="<?php echo $name; ?>" placeholder="enter your name"> </td>
   
</tr>
<tr>   <td> Age </td>
 <td>   <input type="number" name="age" value="<?php echo $age; ?>"></td>
</tr>
<tr>
   <td> Gender </td>
</tr>
<tr>
    <?php 
    $male="";
    $female="";
if($gender=="male")
{
    $male="checked";
}
else
{
    $female="checked";
}
    ?>
<td> Male <input type="radio" name="gender" value="male" <?php echo $male; ?>> </td>
<td> Female <input type="radio" name="gender" value="female" <?php echo $female; ?>> </td>
</tr>

<tr>
   <td> Profession </td>
</tr>
<tr>
<?php 
    $doctor="";
    $engineer="";
    $execuitives="";
if($prof=="doctor")
{
    $doctor="checked";
}
elseif ($prof=="engineer")
{
    $engineer="checked";
}
else
{
    $execuitives="checked";
}

    ?>
<td> Doctor <input type="checkbox" name="doctor" value="doctor" <?php echo $doctor; ?>> </td>
<td> Engineer <input type="checkbox" name="engineer" value="engineer" <?php echo $engineer; ?>> 
 Bank Execuitives <input type="checkbox" name="execuitives" value="execuitives"  <?php echo $execuitives; ?>> </td>
</tr>
<tr>
   <td> <input type="file" name="myfile"> </td>
   <td><img src="<?php echo $image; ?>" width="200" height="200"> 
</tr>

<tr><td><input type="submit" name="enter" value="Update"></td></tr>


</table>

</form>


</body>

</html>