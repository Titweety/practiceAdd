<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Student</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<?php
	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
		echo '<div class="alert alert-success" role="alert">
		'.$msg.'
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
	}
	?>
	<br><a href="addStudent.php" class="btn btn-success mb-2">Add New Student</a>

	<table class="table table-hover text-center">
  <thead class="table-success">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
    </tr>
  </thead>
  <tbody>
  	<?php
include "database.class.php";

$sql = "SELECT * FROM `ad`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
  <td><?php echo $row['id']?></td>
  <td><?php echo $row['first_name']?></td>
  <td><?php echo $row['last_name']?></td>
</tr>
<?php
}
?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>