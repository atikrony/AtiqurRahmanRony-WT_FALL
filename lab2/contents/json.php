<?php
   	

	   //Get form data
	   $formdata = array(
	      'fname'=> $_POST["fname"],
	      'birthday'=> $_POST["birthday"],
	      'email'=>$_POST["email"],
	      'number'=> $_POST["number"],
		  'id'=> $_POST["id"],
		  //'gender'=>$_POST["gender"]
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	 echo "My Name: ".$mydata[1]->fname; echo "<br>";
	 echo "My Birthday: ".$mydata[1]->birthday; echo "<br>";
	 echo "My E-mail: ".$mydata[1]->email; echo "<br>";
	 echo "My Phone Number: ".$mydata[1]->number; echo "<br>";
	 echo "My ID: ".$mydata[1]->id;	echo "<br>";
	 echo "My Gender: ".$mydata[1]->gender; echo "<br>";

?>
    