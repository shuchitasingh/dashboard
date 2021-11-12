<<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registartion Form</h2>
  <?php if (isset($_SESSION['success'])){?>
    <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
    <?php
    }?>

  <?php echo  validation_errors('<div class="alert alert-danger">','</div>'); ?>
  <form method="post" enctype="multipart/formdata" action="<?php echo base_url();?>register/index">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Email ID">
    </div>

	<div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
    </div>

	<div class="form-group">
      <label for="passsword">Password:</label>
      <input type="text" class="form-control" name="password" placeholder="Enter Password">
    </div>

    <input type="submit" name="register" class="btn btn-success" value="Register"/>
  </form>
</div>

</body>
</html>