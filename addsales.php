

<?php
	$fullname=$_POST['fullname'];
	$companyname=$_POST['companyname'];
	$productname=$_POST['productname'];
	$category=$_POST['category'];
	$quantity=$_POST['quantity'];
	$orderdate=$_POST['orderdate'];
	$deliverydatey=$_POST['deliverydate'];

	// create connection
	$conn=new mysqli('localhost','root','','alipet');

	if($conn->connect_error){
	die ('connection fail:' .$conn_connect_error);

	}
	else{ 
	$stmt=$conn->prepare("insert into sales(fulltname,companyname,productname,category,quantity,orderdate,deliverydatey) 
		values(?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssss",$fulltname,$companyname,$productname,$category,$quantity,$orderdate,$deliverydatey);
	$stmt->execute();
	echo "product added successfully";
	$stmt->close();
    $conn->close();
	}
?>

