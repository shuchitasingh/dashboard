<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Menu</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact_us</a></li>
    </ul>
    

    <div class="pull-right">
        <ul class="nav navbar-nav">
            
            <a href="<?php echo base_url();?>logout" class="btn btn-danger">Logout</a>
        </ul>     
</div>
  </div>
  </div>
</nav>
<!-- <form method="" action="<?php  echo base_url(); ?>​">
      <!-- // <button id="btn btn-primary" type="submit" ​​​​​>Sigin</button> -->
       <!-- <button type="button" class="btn btn-primary">Login</button>
</form>  -->
  

</body>
</html>
