<?php
	if(isset($_POST['email']) && isset($_POST['picURL'])){
		$conn = mysqli_connect("localhost", "root", "","facebookapi");
		if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    	}
		
		$email=$_POST['email'];
		$picURL=$_POST['picURL'];

		$sql="INSERT INTO info(email, pictureURL) VALUES('".$email."','".$picURL."') ";

		if($conn){
			$result = mysqli_query($conn, $sql);
			mysqli_close($conn);
		}

		return $result;
	}
?>