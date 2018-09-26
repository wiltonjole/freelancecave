<?php include("adminheader.php"); ?>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-12">
			<!-- view pages  -->
			<h3>View Pages</h3>	

			<div style="text-align: right;">		
			<a href="createpage.php" class="btn btn-primary btn-xs"> Add Engineers</a>
			</div>
			<br/>

			<!-- to display all pages -->
			<table class="table table-bordered table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>#ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email Address</th>
						<th>Phone Number</th>
						<th>Password</th>
						<th>Last Login</th>
						<th>Profile Picture</th>
						<th>Role</th>
						<th>Gender</th>
						<th>Location</th>
						<th>Statues</th>
						<th>Portfolio Id</th>
					</tr>
				</thead>
				<tbody>
					<?php
						// read and fecth page records from pages table
						$query = "SELECT * FROM pages";
						$result = mysqli_query($con,$query);

						// check if the sql query is okay
						if(!mysqli_query($con,$query)){
							echo "Error: ". mysqli_error($con);
						}

						$kounter = 0;
						// display page record from pages table
						while($row = mysqli_fetch_assoc($result)){
					?>
						<tr>
							<td><?php echo ++$kounter; ?></td>
							<td><?php echo $row['pagename']; ?></td>
							<td>
								<a href="editpage.php?pageid=<?php echo $row['pageid']; ?>">
									Edit
								</a> |
								<a href="">Delete</a>
							</td>
						</tr>
					<?php

						}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th>#ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email Address</th>
						<th>Phone Number</th>
						<th>Password</th>
						<th>Last Login</th>
						<th>Profile Picture</th>
						<th>Role</th>
						<th>Gender</th>
						<th>Location</th>
						<th>Statues</th>
						<th>Portfolio Id</th>
					</tr>

				</tfoot>
				
			</table>


		</div>
			
		</div>
</div>

<?php include("adminfooter.php"); ?>