<?php include("adminheader.php"); ?>

<?php
	// check if add page button is clicked and then insert into database
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$pagename = test_input($_POST['pagename']);
		$pageid = $_POST['pageid'];

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

			// save changes to pages table
			$sql = "UPDATE pages set pagename ='$pagename' WHERE pageid='$pageid' ";

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

			<?php
				// get specific page data from pages table based on the pageid
				$mypageid = $_GET['pageid'];

				$query1 = "SELECT * FROM pages WHERE pageid='$mypageid'";
				// check if the sql query is okay
				if(!mysqli_query($con,$query1)){
					echo "Error: ". mysqli_error($con);
				}

				$result1 = mysqli_query($con,$query1);
				$pageinfo = mysqli_fetch_array($result1);

			?>

			<!-- edit page  -->
			<h3>Edit Page</h3>	

			<form class="form-vertical" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?pageid=<?php echo $pageinfo['pageid']; ?>">
				<div class="form-group">
					<label for="pagename">Page Name</label>
					<input type="text" name="pagename" id="pagename" class="form-control" placeholder="Page Name" value="<?php echo $pageinfo['pagename']; ?>" />
					<?php if(isset($errorPagename)){ echo $errorPagename; } ?>
				</div>
				<input type="hidden" name="pageid" value="<?php echo $pageinfo['pageid']; ?>">
				<button type="submit" name="submit" class="btn btn-primary">Update Page</button>
			</form>
			

		</div>
			
		</div>
</div>

<?php include("adminfooter.php"); ?>