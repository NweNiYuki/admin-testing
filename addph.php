
<!DOCTYPE html>
<html>
<head>
	<title>Adding Phone</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
 	
 	<form action="phsql.php" method="post" enctype="multipart/form-data">

  <div class="form-group row">
    <label for="phname" class="col-sm-2 col-form-label">Phone Name</label>
    <div class="col-sm-10">
      <input type="phname" name="phname" class="form-control" id="phname">
    </div>
  </div>

  <div class="form-group row">
    <label for="ph_id" class="col-sm-2 col-form-label">Phone_id</label>
    <div class="col-sm-10">
      <select name="ph_id" id="ph_id">
      	<option value="0">--choose--</option>

      	<?php
      	include("db.php");
      	$result = mysqli_query($conn, "SELECT id, name FROM phone");
      	while ($row = mysqli_fetch_assoc($result)) :
      	?>
      	<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?>
      	</option>  

        <?php endwhile; ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="color" class="col-sm-2 col-form-label">Color</label>
    <div class="col-sm-10">
      <input type="color" name="color" class="form-control" id="color">
    </div>
  </div>

  <!-- <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Colors</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="color" id="color" value="option1" checked>
          <label class="form-check-label" for="color">
            Grey
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="color" id="color" value="option1" checked>
          <label class="form-check-label" for="color">
            RED
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="color" id="color" value="option1" checked>
          <label class="form-check-label" for="color">
            Black
          </label>
        </div>
      </div>
    </div>
  </fieldset> -->

    <div class="form-group">
    <label for="cover">Cover</label>
    <input type="file" name="cover" class="form-control-file" id="cover">
  </div>


 
      <input type="submit" class="btn btn-primary mb-2" value="ADD">
   
</form>


</body>
</html>