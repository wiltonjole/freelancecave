<?php
	 include("../config.php");
	 include("../myfunction.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>FreelanceCave.Ng  </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

	<!-- external CSS -->
	<link rel="stylesheet" type="text/css" href="css/backend.css">
	<style>
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 10px;
}
</style>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-5">
			<h3>FreelanceCave.Ng Backend</h3>
			
		</div>
		<div class="col-md-7" align="right">
			  <a class="btn btn-warning" href="index.php" role="button">Dashboard</a>
			  <a class="btn btn-info" href="viewengineers.php" role="button">View Engineers</a>
			  <a class="btn btn-warning" href="manageroles.php" role="button">Manage Roles</a>
			  <a class="btn btn-success" href="post.php" role="button">Comments</a>
			  <a class="btn btn-info" href="portfolio.php" role="button">Portfolio</a>
			  <a class="btn btn-danger" href="logout.php" role="button">Logout</a>
		</div>
	</div>
	<hr>
	<!-- <div class="row">
		<div class="col-md-7">
			<p><span class="label label-success"> Name :</span><img src="images/img3.jpg" alt="Smiley face" width="202" height="202" align="left"> <span class="label label-primary">Olatunji Omojole</span></p>
			<p><span class="label label-success"> Project Name :</span> <span class="label label-primary">FreelanceCave.Ng</span></p>
			<p><span class="label label-success"> Domain Name :</span> <span class="label label-primary">http://www.freelancecave.com.ng</span></p>
			<p><span class="label label-success"> Project Email :</span> <span class="label label-primary">support@freelancecave.com.ng</span></p>
			<p><span class="label label-success"> Estimated Coding :</span> <span class="label label-primary">53 Hours</span></p>
			<p><span class="label label-success"> Hours Breakdown :</span> <span class="label label-danger">5 Hours/Daily for 11 Days </span></p>


		<!-- <div class="box">
    		<img src="images/img3.jpg" alt="..." class="rounded float-left img-responsive" style="width:150px; height: auto;">
    	<span class="label label-success">Mentored and Supervised by </span> : <span class="label label-primary">Mr Yemi Bamido</span>
		</div>


		
		
		</div> -->


	 
	<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="images/img3.jpg" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                    	<p><span class="label label-success">Project Presented by :</span>
                        <h4>Olatunji Omojole</h4>
                        <small><cite title="Lagos, Nigeria">Lagos, Nigeria <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>omojoley@gmail.com
                            <br />
                            <i class="glyphicon glyphicon-envelope"></i>support@freelancecave.com.ng<br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.freelancecave.com.ng">www.freelancecave.com.ng</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Get to know Jole</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-md-5">
			
			<p><span class="label label-success">Mentored and Supervised by</span> : <span class="label label-primary">Mr Yemi Bamido</span></p>
			<p><span class="label label-success">Co-cordinator</span> : <span class="label label-primary">Mr Oyegbola</span></p>
			<p><span class="label label-success">Project Aim</span> : <span class="label label-primary">A Freelance based platform for engineers and customers to meet </span></p>
			<p><span class="label label-success">Project Goal</span> : <span class="label label-primary">To assist in curbing the rate of unemployment in Nigeria and Africa as a whole </span></p>
			<p><span class="label label-success">Contributors</span> : <br/><span class="badge">Opeyemi Akubo</span><span class="badge">Joseph Uwale</span><span class="badge">Kingsley Wilfred</span><span class="badge">Sunkanmi Olawuwo</span><span class="badge">Timi Elegede</span></p>
		</div>
    </div>
</div>
<hr>
	<!--  <div class="col-md-5">
			
			<p><span class="label label-success">Mentored and Supervised by</span> : <span class="label label-primary">Mr Yemi Bamido</span></p>
			<p><span class="label label-success">Co-cordinator</span> : <span class="label label-primary">Mr Oyegbola</span></p>
			<p><span class="label label-success">Project Aim</span> : <span class="label label-primary">A Freelance based platform for engineers and customers to meet </span></p>
			<p><span class="label label-success">Project Goal</span> : <span class="label label-primary">To assist in curbing the rate of unemployment in Nigeria and Africa as a whole </span></p>
			<p><span class="label label-success">Contributors</span> : <br/><span class="badge">Opeyemi Akubo</span><span class="badge">Joseph Uwale</span><span class="badge">Kingsley Wilfred</span><span class="badge">Sunkanmi Olawuwo</span><span class="badge">Timi Elegede</span></p>
		</div> -->
	</div>



<hr>