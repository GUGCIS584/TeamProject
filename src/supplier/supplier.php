<?php
include "config.php";


if(isset($_REQUEST['submit'])){

	$name=$_REQUEST['Product'];

	$q = mysqli_query($con,"INSERT INTO `Supplier`(`name`) VALUES ('".$name."')");


}

?>
<!DOCTYPE html>
<head>
    <title>University Financial System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
</head>
<body>
<div class="jumbotron">
  <h1 class="display-4">Supplier</h1>
  <form>
  <div class="form-row">
    <div class="col">
      <br>
      <input type="text" name="


	  class="form-control" placeholder="Company Name">
      </br>

    <br>
      <input type="text" name="Product" class="form-control" placeholder="Product">
    </br>
      <br>
      <input type="text" name="Price" class="form-control" placeholder="Price">
    </br>
    <br>
      <button type="submit" class="btn btn-primary" onclick="order.php">Submit</button>
    </br>
    </div>

  </div>
</form>

</div>
</body>
</html>
