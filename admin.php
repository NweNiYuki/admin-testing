
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>blah</title>
</head>
<body>
<form class="form-inline"  action="sqlcon.php" method="post">
  <div class="form-group mx-sm-3">
    <label for="name" class="sr-only">Name</label>
    <input name="name" class="form-control" id="name" placeholder="Phone-name">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="price" class="sr-only">Price</label>
    <input name="price" class="form-control" id="price" placeholder="Price">
  </div>
  <input type="submit" class="btn btn-primary mb-2" value="ADD">

 
</form>

<hr>

<h3>Listings</h3>
<?php
include("db.php");

$query = "SELECT * FROM phone"; 
$result = $conn->query($query);
?>

<table class="table table-bordered">

	
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Phone Name</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
  	<?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><a href="del.php? id=<?php echo $row['id']  ?>" class="del">Cancel</a></td>
      <td><a href="update.php?id=<?php echo $row['id'] ?>" class="edit" >Edit</td>
  <?php endwhile; ?>
      
    </tr>
   
  </tbody>
</table>
  <form class="form-inline my-2 my-lg-0">

            <a href="index.php" type="button" class="btn btn-danger">Logout</a>
          </form>
</body>
</html>