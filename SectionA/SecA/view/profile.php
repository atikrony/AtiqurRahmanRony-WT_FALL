<?php
include("../control/profilecontrol.php");
?>

<html>
<h3> Profile </h3>
hello <?php echo $_SESSION["name"]; ?>

<a href="../control/logout.php"> logout </a>
<a href="../view/showall.php"> Show All User </a>
<a href="../view/updateprofile.php"> Update Profile </a>
<br>
<input type="text" name="search" id="search" onkeyup="getuser()">
<p id="print"></p>
<script src="../js/myscript.js"></script>

</html>