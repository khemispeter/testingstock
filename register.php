

<?php
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$emailaddress=$_POST['emailaddress'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];




	// create connection
	$conn=new mysqli('localhost','root','','alipet');

	if($conn->connect_error){
	die ('connection fail:' .$conn_connect_error);

	}
	else{ 
	$stmt=$conn->prepare("insert into register(firstname,lastname,emailaddress,password,confirmpassword) 
		values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$firstname,$lastname,$emailaddress,$password,$confirmpassword);
	$stmt->execute();
	echo "your registered successfully";
	$stmt->close();
    $conn->close();
	}
?>

