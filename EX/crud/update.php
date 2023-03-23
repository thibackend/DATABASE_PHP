<?php 
require "conn.php";
$id= $_GET["id"];
if(isset($_POST["submit"])){
   $name=  $_POST["name"];
	$gender=  $_POST["gender"];
	$address=  $_POST["address"];
	$sql ="UPDATE `Person` SET `name`='$name',`gender`='$gender',`address`='$address' WHERE id='$id';";

	$result = mysqli_query($conn,$sql);
	if($result){
		header("location: ./index.php");
	}
	else{
		die("Failed:".mysqli_error($conn));
	}
}

$sql= "SELECT * FROM `Person` WHERE id=$id LIMIT 1;";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
</head>
<link rel="stylesheet" href="css.css">
<body>
	<form method ="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" value="<?php echo $row["name"]; ?>"><br>
		<label for="gender">Gender:</label>
		<input type="text" id="gender" name="gender" value="<?php echo $row["gender"]; ?>"><br>
		<label for="address">address:</label>
		<input type="text" id="address" name="address" value="<?php echo $row["address"]; ?>"> <br>

		<button class="btn-sbt" type="submit" name ="submit" >update</button> <br>
        <button class="cnl"><a href="index.php">Cancel</a></button>
	</form>
</body>
</html>