
<?php include "control/results.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Registration Form
    </title>
  </head>
<body>
  
  
  <table>
      <h1>Registration form </h1>

      <form action="" method="post" > 
      <tr>
          <td> Enter your first name: </td> 
          <td> <input type="text" name="fname" placeholder="Full Name"> </td>
          <td> <?php echo $validatename; ?> </td>
      </tr>
      
      <tr>
          <td> Enter your email: </td>
          <td><input type="text" name="email"> </td>
          <td><?php echo $validateemail; ?></td>
      </tr>
    
      <tr>
          <td> <label for="birthday">Birthday:</label> </td>
          <td> <input type="date" id="birthday" name="birthday"></td>
          <td> <?php echo $dob; ?> </td>
      </tr>
   

      <tr>
          <td>Enter your ID: </td>
          <td> <input type="text" name="id" placeholder="ID"> </td>
          <td> <?php echo $id; ?> </td>
  
      </tr>


      <tr>
          <td> Enter your Number: </td>
          <td><input type="text" name="number" placeholder="Number"> </td>
          <td> <?php echo $number; ?> </td> 
      </tr>
       

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
    
      <tr>
          <td><input type="submit" value="SUBMIT">
          <input type="reset" value="RESET">
          </td>
    </tr>
     
    </form>
  </table> 

</body>
</html>