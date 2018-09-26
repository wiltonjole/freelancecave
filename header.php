<?php


?>

<!DOCTYPE html>
<!-- These will be the basic I wil be working on starting from today! -->
<html lang="en">
	<head>
		<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FreelanceCave.Ng | HomePage</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- external css-->
		<link rel="stylesheet" type="text/css" href="css/project.css" />
<style type="text/css">
body {
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #333;
	text-align: center;
	text-transform: uppercase;
	font-family: "Roboto", sans-serif;
	font-weight: bold;
	position: relative;
	margin: 25px 0 50px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 3px;
	background: #ffdc12;
	left: 0;
	right: 0;
	bottom: -10px;
}

	</head>



	<body>
		<style type="text/css">
			
		</style>


<div class="row">
	<div class="col-md-12">
		<div class="header">
 	 	<a href="#default" class="logo">CompanyLogo</a>
 	 	<div class="header-right">
    	<button><a class="active divider" href="index.php">Home</a></button>
    	<button><a class="active divider" data-toggle="modal" data-target="#exampleModal">Login</a></button>
    	<button><a class="active divider" href="become-an-eng.php">Become an Engineer</a></button>

 	 	</div>
		</div>
	</div>

<!-- Just an Header modal to control the login form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FreelanceCave.Ng Logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<form id="loginSection">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
<input id="btnLogin" type="button" name="" class="btn btn-primary" value="login">


   </form>


      </div>
      <div class="modal-footer">
        Keeping these for future purpose 
      </div>
    </div>
  </div>
</div>


</div>