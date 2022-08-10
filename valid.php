<?php
	$FirstName = $_POST['txtFName'];
	$LastName = $_POST['txtLName'];
	$DOB = $_POST['Date'];
	$Email = $_POST['Email'];
	$MobileNo = $_POST['mobileNo'];
	$Gender = $_POST['Gender'];
	$Address = $_POST['address'];
	$City = $_POST['city'];
	$PINCode = $_POST['pincode'];
	$State = $_POST['state'];
	$Country = $_POST['selCountry'];
	$Hobbies = "";

    if(isset($_POST['playing']))
    {
        $Hobbies=$_POST['playing'];
    }
    if(isset($_POST['traveling']))
    {
        $Hobbies=$Hobbies.", ".$_POST['traveling'];
    }
    if(isset($_POST['dancing']))
    {
        $Hobbies=$Hobbies.", ".$_POST['dancing'];
    }
    if(isset($_POST['other']))
    {
        $Hobbies=$Hobbies.", ".$_POST['other'];
    }
    


	$Coures = $_POST['coures'];

    if(empty($FirstName)){
        echo "First Name Can't be empty";

    }
    elseif(!ereg('^[a-z]|[A-Z]',$FirstName)){
        echo "Name must be in Character";
    }

	echo "firstname: $FirstName"."<br>";
	echo "lastname: $LastName"."<br>";
	echo "date of birth: $DOB"."<br>";
	echo "Email: $Email"."<br>";
	echo "Mobile No: $MobileNo"."<br>";
	echo "Gender: $Gender"."<br>";
	echo "Address is: $Address"."<br>";
	echo "City: $City"."<br>";
	echo "PINCode: $PINCode"."<br>";
	echo "State: $State"."<br>";
	echo "Country: $Country"."<br>";
    echo "Hobbies: $Hobbies"."<br>";
	echo "Coures: $Coures"."<br>";
	


?>