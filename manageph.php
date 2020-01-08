<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<title>Manage</title>
</head>
<body>
<h3>List of categories</h3>
<hr>


<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Phone_Type</th>
      <th scope="col">Price</th>
      <th scope="col">Color</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  	<?php
include("db.php");

$result =mysqli_query($conn, "SELECT categories.*, phone.price FROM categories LEFT JOIN phone ON categories.ph_id = phone.id");

?>

  	<?php while ($row =mysqli_fetch_assoc($result)) : ?>

    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['phname'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><?php echo $row['color'] ?></td>
      <div class="col-md-8">
        
      <td><img src="covers/<?php echo $row['cover'] ?>" alt="" height="140" ></td>

          </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<td>  <a href="addph.php" class="btn btn-primary" role="button" aria-pressed="true">Back</a></td>

</body>
</html>