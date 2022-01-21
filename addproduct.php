

<?php
	$productname=$_POST['productname'];
	$category=$_POST['category'];
	$quantity=$_POST['quantity'];
	$brand=$_POST['brand'];
	$price=$_POST['price'];




	// create connection
	$conn=new mysqli('localhost','root','','alipet');

	if($conn->connect_error){
	die ('connection fail:' .$conn_connect_error);

	}
	else{ 
	$stmt=$conn->prepare("insert into product(productname,category,quantity,brand,price) 
		values(?,?,?,?,?)");
	$stmt->bind_param("ssssi",$productname,$category,$quantity,$brand,$price);
	$stmt->execute();
	echo "product added successfully";
	$stmt->close();
    $conn->close();
	}
?>

