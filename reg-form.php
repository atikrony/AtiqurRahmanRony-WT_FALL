<?php

$fatherer = $studenter = $motherer  =$passworder= $confirmpassworder = $emailer = "";
$genderer = $dober = $phoneer = "" ;
$message = " You did not submit that info!";
if(isset($_REQUEST["submit"]))
	{
		if(empty($_REQUEST["father_name"]))
			{
				$fatherer="*required" ;
			}
		
		else
			{
				$fatherer= "OK";
			}
		
			echo "<br>";

		if (empty($_REQUEST['mother_name']))
			{
				$motherer  = '*required';
			}
		else 
			{
				$motherer  = "OK" ;
			}

			echo"<br>";

		if (empty($_REQUEST['student_name']))
			{
				$studenter  = '*required';
			}
		else 
			{
				
				$studenter  = "OK";
			}

		echo"<br>";

		if(empty($_REQUEST["father_name"]))
		{
			$phoneer="*required";
		}
		else
			{
				$phoneer= "OK";
				
			}
	
		echo "<br>";

		if(empty($_REQUEST["dob"]))
		{
			$dober="*required";
		}
		else
			{
				$dober= "OK";
				
			}
		if(empty($_REQUEST["gender"]))
		{
			$genderer="*required";
		}
		else
			{
				$genderer= "OK";
				
			}
	
		echo "<br>";
		
		if (empty($_REQUEST["email"])) 
			{
				$emailer = "Invalid";
			} 
		
		else
			{
				
					$emailer = "OK"; 
			}

		if(!empty($_POST["passworder"]) && ($_POST["passworder"] == $_POST["confirmpassworder"])) 
			{
			$passworder = test_input($_POST["passworder"]);
			$confirmpassworder = test_input($_POST["confirmpassworder"]);
			
			if (strlen($_POST["passworder"]) <= '8') 
				{
					$passworder = "Your Password Must Contain At Least 8 Characters!";
				}

			}

			


	}



?>


<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form action="" method="POST">
           
        <table>
            <tr>
                <td>Father's name:</td>
                <td><input type="text" name="father_name"placeholder="Mr. Robot"></td>
                <td><?php echo $fatherer ;?></td>
            </tr>           
            <tr>
                <td>Mother's Name:</td>
                <td><input type="text" name='mother_name'placeholder="Mrs. Robot"></td>
                <td><?php echo $motherer ?></td>
            </tr>

			<tr>
                <td>Student's Name:</td>
                <td><input type="text" name='student_name'placeholder="Robot Jr."></td>
                <td><?php echo $studenter ?></td>
            </tr>
			

            <tr>
                <td>Date of Birth :</td>
                <td><input type="date" name="dob" ></td>
				<td><?php echo $dober ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                 <td>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="binary">Binary
					<td><?php echo $genderer ?></td>
                </td>
            </tr>
                <tr>
                <td>Mobile Number :</td>
                <td><input type="text" name="mobile_no" placeholder="011-XXXX-XXXX"></td>
				<td><?php echo $phoneer ?></td>
            </tr>
            
            <tr>
                <td>Enter your Email:</td>
                <td><input type="email" name = "email"placeholder="Enter your Email"></td>
				<td> <?php echo $email ?> </td>
            </tr>
            <tr>
                <td>Enter your Password:</td>
                <td><input type="password" name = "password"placeholder="Enter your Password"></td>
                <td><?php echo $passworder ;?></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name = "confirm_password"placeholder="Confirm Password"></td>
                <td><?php echo  $confirmpassworder ;?></td>
            </tr>

			<tr>
				<td>
					<input type="submit" name ="submit" value="Submit"> 
					<input type="reset" value= "Reset">
				</td>
				<!-- <td><button><a href="register.php"> SHOW INFO </button></a> </td> -->
			</tr>
        </table>

        </form>
    </body>
</html>

