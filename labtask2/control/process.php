<?php
	   $formdata = array(
	      'FirstName'=> $_POST["FirstName"],
	      'LastName'=> $_POST["LastName"],
          'Age'=> $_POST["Age"],
          'Email'=>$_POST["Email"],
	      'Password'=> $_POST["pass"],
          'Designation'=> $_POST["post"],
          'Prefered Language' => $_POST["go"]
          
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;

	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	 echo "my value: ".$mydata[1]->LastName;

?>