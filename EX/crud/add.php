<?php 
require "conn.php";
if(isset($_POST["submit"])){
    $name=  $_POST["name"];
	$age=  $_POST["age"];
	$gender=  $_POST["gender"];
	$address=  $_POST["address"];
	$sql ="INSERT INTO `Person`(`name`,`age`,`gender`, `address`) VALUES ('$name','$age',$gender','$address')";
	$result = mysqli_query($conn,$sql);
	if($result){
		header("location: ./index.php?msg='record successfull';");
	}
	else{
		echo "Failed:".mysqli_error($conn);
	}
}
?>
</head>
<link rel="stylesheet" href="css.css">
<body>
	<form method ="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" placeholder="Enter your name" required><br>
		<input type="text" id="gender" name="gender" placeholder="Enter gender" required><br>
		<label for="age">age:</label>
<!-- 
		<label for="age">Age:</label>
		<input type="text" id="age" name="age" placeholder="Enter age" required><br> -->
		<label for="gender">Gender:</label>		
		<input type="text" id="age" name="age" placeholder="Enter age" required><br>
		<label for="address">address:</label>
		<input type="text" id="address" name="address" placeholder="Enter address" required> <br>

		<button class="btn-sbt" type="submit" name ="submit" >Submit</button>
	</form>
</body>
</html>