<?php include "../Controller/loginP.php"; ?>
<html>
<head>
<title>Login Form</title>
<body>
<h1>Login Form</h1>
<form action="" method="post">
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="username" placeholder="Username"> <?php echo $username; ?></td>
</td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" placeholder="Password"> <?php echo $password; ?></td>
</td>
</tr>
<tr>
<td><input type="submit" value="Login"></td>
</tr>

<tr>
    <td>
        <h3>Don't have an account? <a href="../Reletedview/AdminFormJson.php">Register</a> here</h3>
    </td>
</tr>

</table>
</form>
</body>
</head>
</html>