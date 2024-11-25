<?php
include_once "database.class.php";

if (isset($_POST['submit'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];

	$sql = "INSERT INTO `ad`(`id`, `first_name`, `last_name`) VALUES ('NULL','$first_name','$last_name')";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("Location: index.php?msg=New student added successfulyy");
	}
	else{
		echo "Failed: " . mysqli_error($conn);
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adding New Student</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="text-center mb-4">
		<h3>Add New Student!</h3>
	</div>
</div>
<div class="container d-flex justify-content-center">
	<form action="" method="post" style="width:20vw; min-width:300px;">
		<div class="col">
			<div class="col">
				<label class="form-label">First Name:</label>
				<input type="text" class="form-control" name="first_name" placeholder="First Name" required>
			</div>
			<div class="col">
				<label class="form-label">Last Name:</label>
				<input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
			</div>
		</div>
		<br>
		<div>
			<button type="submit" class="btn btn-success" name="submit">Add</button>
			<a href="index.php" class="btn btn-danger">Back</a>
		</div>
	</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>