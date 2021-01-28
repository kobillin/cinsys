<?php require 'conshow.php'; ?>

<?php 
//initializing and creating variables

$id ="";
$fullname ="";
$mobile ="";
$username ="";
$email ="";
$created_at ="";
$role ="";

function showdata(){
	global $conn;

	$query ="SELECT * FROM users ORDER BY id ASC";
	$run = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_assoc($run)) {
		$id = $row['id'];
		$fullname = $row['fullname'];
		$mobile = $row['mobile'];
		$email = $row['email'];
		$created_at = $row['created_at'];
		$role = $row['role'];

		echo "<tr>";
		echo "<td>{$id}</td>";
		echo "<td>{$fullname}</td>";
		echo "<td>{$mobile}</td>";
		echo "<td>{$email}</td>";
		echo "<td>{$created_at}</td>";
		echo "<td>{$role}</td>";
		echo "<td> <a href='users.php?delete={$id}'class='btn btn-danger' >Delete</a> </td>";
		echo "</tr>";
	}
}

//Delete 

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];

	$query ="DELETE FROM users WHERE id='$id'";

    $run = mysqli_query($conn, $query);

    if ($run) {
    	echo "<script>alert('User has been deleted')</script>";
    	echo "<script>window.open('../app/users.php', '_self')</script>";

    }
}
//delete inventory
if (isset($_GET['deleteinv'])) {
	$id = $_GET['deleteinv'];

	$query ="DELETE FROM registrations_invent WHERE id='$id'";

    $run = mysqli_query($conn, $query);

    if ($run) {
    	echo "<script>alert('Inventory has been deleted')</script>";
    	echo "<script>window.open('../app/inventories.php', '_self')</script>";

    }
}

//Update inventory
if (isset($_GET['updateinv'])) {
	$id = $_GET['updateinv'];

	$query ="UPDATE FROM registrations_invent WHERE id='$id'";

    $run = mysqli_query($conn, $query);

    if ($run) {
    	echo "<script>alert('Inventory has been Updated')</script>";
    	echo "<script>window.open('../app/inventories.php', '_self')</script>";

    }
}


//MY inventory
function showmyinvent(){
	global $conn;
	$user_id = $_SESSION['id'];
	$query ="SELECT * FROM registrations_invent WHERE user_id = $user_id ORDER BY id ASC";
	$run = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_assoc($run)) {
		
		// Get data from FROM
		    $id = $row['id'];
			$description = $row['description'];
			$brand = $row['brand'];
			$model = $row['model'];
			$serial_no = $row['serial_no'];
			$location = $row['location'];
			$department = $row['department'];
			$assigned_to = $row['assigned_to'];
			$status = $row['status'];
			$created_at = $row['created_at'];

		echo "<tr>";
		echo "<td>{$id}</td>";
		echo "<td>{$description}</td>";
		echo "<td>{$brand}</td>";
		echo "<td>{$model}</td>";
		echo "<td>{$serial_no}</td>";
		echo "<td>{$location}</td>";
		echo "<td>{$department}</td>";
		echo "<td>{$assigned_to}</td>";
		echo "<td>{$status}</td>";
		echo "<td>{$created_at}</td>";
		// echo "<td> <a href='#?updateinv={$id}'class='btn btn-primary' >Edit</a> </td>";
		// echo "<td> <a href='bookings.php?deleteb={$id}'class='btn btn-danger' >Delete</a> </td>";
		echo "</tr>";
	}
}

//All Inventory
function showinvent(){
	global $conn;

	$query ="SELECT * FROM registrations_invent ORDER BY id ASC";
	$run = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_assoc($run)) {
		
		// Get data from FROM
		    $id = $row['id'];
			$description = $row['description'];
			$brand = $row['brand'];
			$model = $row['model'];
			$serial_no = $row['serial_no'];
			$location = $row['location'];
			$department = $row['department'];
			$assigned_to = $row['assigned_to'];
			$status = $row['status'];
			$created_at = $row['created_at'];

		echo "<tr>";
		echo "<td>{$id}</td>";
		echo "<td>{$description}</td>";
		echo "<td>{$brand}</td>";
		echo "<td>{$model}</td>";
		echo "<td>{$serial_no}</td>";
		echo "<td>{$location}</td>";
		echo "<td>{$department}</td>";
		echo "<td>{$assigned_to}</td>";
		echo "<td>{$status}</td>";
		echo "<td>{$created_at}</td>";
		echo "<td> <a href='inventories.php?deleteinv={$id}'class='btn btn-danger' >Delete</a> </td>";
		// echo "<td> <a href='#?updateinv={$id}'class='btn btn-primary' >Edit</a> </td>";
		// echo "<td> <a href='users.php?delete={$id}'class='btn btn-danger' >Delete</a> </td>";
		echo "</tr>";
	}
}

//check if device exists
function invent_exists($serial_no, $conn)
{
	$result = mysqli_query($conn,"SELECT serial_no FROM registrations_invent WHERE serial_no ='$serial_no'");

	if (mysqli_num_rows($result)== 1) 
	{
		return true;
	}
	else
	{
		return false;
	}
}

 ?>