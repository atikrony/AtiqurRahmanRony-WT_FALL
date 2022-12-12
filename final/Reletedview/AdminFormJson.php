<?php include "../Controller/AdminP.php"; ?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="reg.css">
    <title>
      Registration Form
    </title>
  </head>
<body>
  <div class ="form-center">
  <!-- Registration Form -->
  <table  >
      <h1>Registration form </h1>

      <form  action="" method="post"  > 
      <tr>
          <td> Enter your first name: </td> 
          <td> <input type="text" name="fname" placeholder="Full Name"> </td>
          <td> <?php echo $validatename; ?> </td>
      </tr>
  <!-- Mail -->
      <tr>
          <td> Enter your email: </td>
          <td><input type="text" name="email"> </td>
          <td><?php echo $validateemail; ?></td>
      </tr>
  <!-- DOB -->  
      <tr>
          <td> <label for="birthday">Birthday:</label> </td>
          <td> <input type="date" id="birthday" name="birthday"></td>
          <td> <?php echo $dob; ?> </td>
      </tr>
      <!-- ID -->
      <tr>
          <td>Enter your ID: </td>
          <td> <input type="text" name="id" placeholder="ID"> </td>
          <td> <?php echo $id; ?> </td>
  
      </tr>
<!-- Number -->
      <tr>
          <td> Enter your Number: </td>
          <td><input type="text" name="number" placeholder="Number"> </td>
          <td> <?php echo $number; ?> </td> 
      </tr>
<!-- Gender -->
      <tr>
          <td> Please select your gender:  </td>
          <td> <input type="radio" id="male" name="gender" value="male"> 
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="female">  
          <label for="female">Female</label>
          <input type="radio" id="other" name="gender" value="other">  
          <label for="other">Other</label></td>
          <td> <?php echo $validateradio; ?></td>
      </tr>

<!-- User name --> 
      <tr>
          <td> Enter your username: </td>
          <td> <input type="text" name="username" placeholder="Username"><?php echo $username; ?> </td>
      </tr>
      
<!-- Password -->
      <tr>
          <td> Enter your password: </td>
          <td> <input type="password" name="password" placeholder="Password"> <?php echo $password; ?> </td>
      </tr>
<!-- File Upload --> 
      <tr>
      <td>fileupload:</td>
        <td><input type="file" name="fileupload" class="fileupload"></td>
    </tr>

    <tr>
      <td>
        <br>
      </td>
    </tr>

      <tr>
          <td>
           
            <input type="submit" name="enter" class="shape submit" value="SUBMIT">
         
          <td>
           <input type="reset" name="reset" class="shape reset" value="RESET">
          </td>
        
          </td>
    </tr>

    <tr>
      <td> 
        <br>
      <h3>Already have an account?</h3>    
      </td>
    </tr>
    
    <tr>
      <td>
      <a><a href="../Reletedview/login.php"> <input type="button" class="shape login" value= "LOGIN"></a>
      </td>
    </tr>

   
    </form>
  </table> 
</div>
</body>
</html>

