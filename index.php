<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Admin Login Page</title>
</head>
<body>
<div class="container">
    <form action="check.php" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text"  name="username" class="form-control" id="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  
  <input type="submit" class="btn btn-primary" value="Submit"></button>
</form>
</div>

</body>
</html>