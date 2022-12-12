 <?php
$validatename = $validateemail = $validatecheckbox = $validateradio= $dob = ""; 
$password = $username = $file = "";
$currentDate=date("Y-m-d");
$name = $email = $gender = $id= $number = "" ;
$is_validate = true;


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_REQUEST["fname"];
    $email = $_REQUEST["email"];
    //name validation
    if(empty($_REQUEST["fname"]) ||  !preg_match("/^[A-Za-z]+$/",$name))
    {
        $validatename= "you must enter name"; 
        $is_validate = false;

    }
    else
    {
        $name=$_REQUEST["fname"];
        $is_validate = true;
    }
    //email validation
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $validateemail= "you must enter email";
        $is_validate = false;
    }
    else
    {
        $email=$_REQUEST["email"];
        $is_validate = true;
    }  
    //gender validation
    if(isset($_REQUEST["gender"]))
    {
        $validateradio= $_REQUEST["gender"];
        $is_validate = true;
    }
    else{
        $validateradio= "please select at least one radio";
        $is_validate = false;
    }

    //date of birth validation
    $dob = $_REQUEST["birthday"];
    if ($dob>$currentDate) {
        $dob = " dob is not valid"; 
        $is_validate = false;
    } else {
        $dob= date_create($dob);
        $currentDate=date_create($currentDate);
        $dateDiff=date_diff($dob,$currentDate);
        $age = $dateDiff->format("%y");
        if ($age<18) {
            $dob = "you are not eligible";
            $is_validate = false;
        } else {
            $dob = "your age is ".$age;
        }
    }

    //ID validation
   
    if(empty($_REQUEST["id"]) || !preg_match("/^[0-9]{2}-[0-9]{5}-[0-9]{1}$/",$_REQUEST["id"]))
    {
        $id= "you must enter ID";
        $is_validate = false;
    }
    else
    {
        $id=$_REQUEST["id"];
    }

    //number validation
    
    if(empty($_REQUEST["number"]) || !preg_match("/^01[0-9]{9}$/",$_REQUEST["number"]))
    {
        $number= "you must enter number";
        $is_validate = false;
    }
    else
    {
        $number=$_REQUEST["number"];
    }

    //password validation
    if(empty($_REQUEST["password"]) || strlen($_REQUEST["password"])<8)
    {
        $password= "you must enter password";
        $is_validate = false;
    }
    else
    {
        $password= "password saved";
    }

    //username validation
    if(empty($_REQUEST["username"]) || strlen($_REQUEST["username"])<8)
    {
        $username= "you must enter username";
        $is_validate = false;
    }
    else
    {
        $username=$_REQUEST["username"];
    }
    
    //file validation
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $file = "File uploaded successfully";
                } else {
                    $file = "Your file is too big!";
                }
            } else {
                $file = "There was an error uploading your file!";
            }
        } else {
            $file = "You cannot upload files of this type!";
        }
    } else {
        $file = "You have not selected any file!";
    }


 if ($is_validate) 
        {
        //Get form data
        $formdata = array(
            'fname'=> $_POST["fname"],
            'birthday'=> $_POST["birthday"],
            'email'=>$_POST["email"],
            'number'=> $_POST["number"],
            'id'=> $_POST["id"],
            'gender'=>$_POST["gender"],
            'username'=> $_POST["username"],
            'password'=> $_POST["password"]
           
        );
        setcookie("formdata",json_encode($formdata),time()+(3600*24*30*12));
        $existingdata = file_get_contents('../data/data.json');
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] =$formdata;
        //Convert updated array to JSON
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
        
        //write json data into data.json file
        if(file_put_contents("../data/data.json", $jsondata)) {
            echo "Data successfully saved <br>";
        }
        else 
            echo "no data saved";

    $data = file_get_contents("../data/data.json");
    $mydata = json_decode($data);

    $count=count($mydata);
    echo "My Name: ".$mydata[$count-1]->fname; echo "<br>";
    echo "My Birthday: ".$mydata[$count-1]->birthday; echo "<br>";
    echo "My E-mail: ".$mydata[$count-1]->email; echo "<br>";
    echo "My Phone Number: ".$mydata[$count-1]->number; echo "<br>";
    echo "My ID: ".$mydata[$count-1]->id;	echo "<br>";
    echo "My Gender: ".$mydata[$count-1]->gender; echo "<br>";
    echo "My Username: ".$mydata[$count-1]->username; echo "<br>";
    echo "My Password: ********"; echo "<br>";
   

        }

        else
        {
            echo "Please fill the form again";
        }

}
    