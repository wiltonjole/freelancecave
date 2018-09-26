<?php include("adminheader.php"); ?>

<?php
	// check if add section button is clicked and then insert into database
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$pageid = test_input($_POST['pageid']);
		$title = test_input($_POST['title']);
		$body = test_input($_POST['body']);

		// validate page
		if(empty($_POST['pageid'])){
			$errorPage = "<div class='error'> Page field is required!</div>";
		}

		// validate section title
		if(empty($_POST['title'])){
			$errorTitle = "<div class='error'> Section Title field is required!</div>";
		}

		// validate section body
		if(empty($_POST['body'])){
			$errorBody = "<div class='error'> Section Body field is required!</div>";
		}

		// check if section title already exists for the page
		$query = "SELECT * FROM sections WHERE pageid = '$pageid' AND sectiontitle = '$title'";
		//var_dump($query);

		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result) > 0 ){
			$errorTitle = "<div class='error'> This $title already added to the selected page! </div>";
		}


		if($errorPage=="" && $errorTitle=="" & $errorBody==""){

			// echo "<pre>";
			// print_r($_FILES);
			// echo "</pre>";
			// die();

			// check if global variable $_FILES has a value
			if(!$_FILES['image'][error] > 0){
				// upload and insert data into database

				// assign folder to upload the image
				$folder = "uploads/";
				$filename = $_FILES['image']['name'];
				$filesize = $_FILES['image']['size'];
				$filetype = $_FILES['image']['type'];
				$tempfolder = $_FILES['image']['tmp_name'];

				// get the file extension
				$file_ext = strtolower(end(explode('.',$filename)));

				// specify the file extensions allowed
				$extensions = array("png","jpg", "jpeg", "gif");

				// check for valid extension
				if(in_array($file_ext, $extensions)===false){
					$error[] = "Extension not allowed, please upload image in png, jpg, jpeg, gif format";
				}


				// check the file size
				if($filesize > 2097152){
					$error[] = "File size must be exactly or less than 2 MB";
				}


				$destination = $folder.$filename;

				// check if there is no file upload error
				if(empty($error)==true){
					move_uploaded_file($tempfolder, $destination);

					// save into sections table
					$sql = "INSERT INTO sections(pageid, sectiontitle, sectionbody, sectionimage, userid) VALUES('$pageid', '$title', '$body', '$filename', '1')";

					//var_dump($sql);

					if(!mysqli_query($con, $sql)){

						echo "Error: ". mysqli_error($con); 

					}else{
						// redirect to view sections
						header("Location: viewsections.php");
						exit();
					}


				}



			}else{
				// insert data into database
			}

	

		}

	}

?>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-10">

			<!-- create section  -->
			<h3>Create Section</h3>	

			<form class="form-vertical" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

				<?php
					// read and fetch pages form pages table
					$myquery = "SELECT * FROM pages";
					$myresult = mysqli_query($con, $myquery);

					// check if the sql query is okay
					if(!mysqli_query($con, $myquery)){
						echo "Error: ".mysqli_error($con);
					}

				?>

				<div class="form-group">
					<label for="pageid">Page</label>
					<select name="pageid" id="pageid">
						<option value="">Select Page</option>
						<?php
							// display options from pages table
							while($row = mysqli_fetch_assoc($myresult)){
							
						?>
						<option value="<?php echo $row['pageid']; ?>">
							<?php echo $row['pagename']; ?>
						</option>
						<?php
							}
						?>
						
					</select>
					<?php if(isset($errorPage)){ echo $errorPage; } ?>
				</div>

				<div class="form-group">
					<label for="title">Section Title</label>
					<input type="text" name="title" id="title" class="form-control" placeholder="Section Title" />
					<?php if(isset($errorTitle)){ echo $errorTitle; } ?>
				</div>


				<div class="form-group">
					<label for="body">Section Body</label>					
					<textarea rows="8" name="body" id="body" class="form-control" ></textarea>
					<?php if(isset($errorBody)){ echo $errorBody; } ?>
				</div>

				<div class="form-group">
					<label for="image">Section Image</label>
					<input type="file" name="image" id="image" class="form-control" placeholder="Section Image" />
					<?php //if(isset($errorImage)){ echo $errorImage; } ?>
				</div>


				<button type="submit" name="submit" class="btn btn-primary">Add Section</button>
			</form>
			

		</div>
			
		</div>
</div>

<?php include("adminfooter.php"); ?>