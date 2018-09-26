<?php include("adminheader.php"); ?>

<?php
	// check if add page button is clicked and then insert into database
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$pagename = test_input($_POST['pagename']);

		// validate form
		if(empty($_POST['pagename'])){
			$errorPagename = "<div class='error'> Page name is required </div>";
		}

		// check if pagename exists
		$query = "SELECT * FROM pages WHERE pagename = '$pagename'";
		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result) > 0 ){
			$errorPagename = "<div class='error'> This $pagename Page name already exists! </div>";
		}


		if($errorPagename==''){

			// save into pages table
			$sql = "INSERT INTO pages(pagename) VALUES('$pagename')";

			//var_dump($sql);

			if(!mysqli_query($con, $sql)){

				echo "Error: ". mysqli_error($con); 

			}else{
				// redirect to view pages
				header("Location: viewpages.php");
				exit();
			}

		}

	}

?>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-10">

			<!-- create page  -->
			<h3>Create Page</h3>	

			<form class="form-vertical" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div class="form-group">
					<label for="pagename">Page Name</label>
					<input type="text" name="pagename" id="pagename" class="form-control" placeholder="Page Name" />
					<?php if(isset($errorPagename)){ echo $errorPagename; } ?>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Add Page</button>
			</form>
			

		</div>
			
		</div>
</div>

<?php include("adminfooter.php"); ?>