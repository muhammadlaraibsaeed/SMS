<?php
session_start();
header('Content-Type: application/json');
include 'database.php';
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$json = file_get_contents("php://input");
		$data = json_decode($json,true);
		// this is use for login person
		if(isset($data['login'])){
			$email = $data['email'];
			$password = $data['password'];
			$sql = "SELECT * FROM crud WHERE email = '$email' AND password ='$password';";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			if(!empty($row)){
			$type =$row[0]['type'];
			$email = $row[0]['email'];
			$_SESSION['email'] = $email;
			$_SESSION['type']=$type;
				echo json_encode(array("type"=>$type,"login"=>"yes"));
			}else{
				echo json_encode(array("error"=>"login"));
			}
		}
		elseif(isset($data['signup'])){
			$name= $data['name'];
			$email= $data['email'];
			$phone= $data['phone'];
			$city= $data['city'];
			$type= $data['type'];
			$password= $data['password'];
			$gender = $data['gender'];
			$sql = "INSERT INTO `crud`( `name`, `email`,`phone`,`city`,`type`,`password`,`gender`) 
			VALUES ('$name','$email','$phone','$city','$type','$password','$gender')";
			$result = mysqli_query($conn,$sql);
			if($result){
			$_SESSION['type']=$type;
			$_SESSION['email']=$email;
			echo json_encode(array("login"=>"yes"));
			}
		}
		else{
		$name= $data['name'];
		$email= $data['email'];
		$phone= $data['phone'];
		$city= $data['city'];
		$type= $data['type'];
		$password= $data['password'];
		$gender = $data['gender'];
		$sql = "INSERT INTO `crud`(`name`, `email`,`phone`,`city`,`type`,`password`,`gender`) 
		VALUES ('$name','$email','$phone','$city','$type','$password',$gender)";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
					
	 }
	}

	if($_SERVER['REQUEST_METHOD']=='PUT'){
		$json = file_get_contents("php://input");
		$data = json_decode($json,true);
		$id= $data['id'];
		$name= $data['name'];
		$email= $data['email'];
		$phone= $data['phone'];
		$city= $data['city'];
		$sql = "UPDATE `crud` SET `name`='$name',`email`='$email',`phone`='$phone',`city`='$city' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

	if($_SERVER['REQUEST_METHOD']=='DELETE'){
		$json = file_get_contents("php://input");
		$data = json_decode($json,true);
		$id= $data['id'];
		$sql = "DELETE FROM `crud` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

?>