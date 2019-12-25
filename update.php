<?php
include("db.php");

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM phone WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>
<?php
include("db.php");
if (isset($_POST['submit'])) {

	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];

	$sql = "UPDATE phone SET name='$name', price='$price' WHERE id = $id";
	mysqli_query($conn, $sql);
	header("location:admin.php");
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>blah</title>
</head>
<body>
<form class="form-inline"  action="" method="post" enctype="multipart/form-data" >
	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  <div class="form-group mx-sm-3">
    <label for="name" class="sr-only">Name</label>
    <input name="name" class="form-control" id="name" placeholder="Phone-name" value="<?php echo $row['name'] ?>">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="price" class="sr-only">Price</label>
    <input name="price" type="username" class="form-control" id="price" placeholder="Price" value="<?php echo $row['price'] ?>">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary"  role="button">Edit</button>
</form><br>

 
</form>

  <form class="form-inline my-2 my-lg-0">

            <a href="admin.php" type="button" class="btn btn-danger">Back</a>
          </form>
</body>
</html>