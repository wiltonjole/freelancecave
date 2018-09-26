<?php include("adminheader.php"); ?>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-12">
			<!-- view sections  -->
			<h3>View Sections</h3>	

			<div style="text-align: right;">		
			<a href="createsection.php" class="btn btn-primary btn-xs"> Create Section</a>
			</div>
			<br/>

			<!-- to display all sections -->
			<table class="table table-bordered table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>#</th>
						<th>Page name</th>
						<th>Title</th>
						<th>Body</th>
						<th>Image</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						// read and fetch section records from sections table
						$query = "SELECT sections.*, pages.pagename FROM sections
						LEFT JOIN pages ON sections.pageid = pages.pageid";
						$result = mysqli_query($con,$query);

						// check if the sql query is okay
						if(!mysqli_query($con,$query)){
							echo "Error: ". mysqli_error($con);
						}

						$kounter = 0;
						// display section record from sections table
						while($row = mysqli_fetch_assoc($result)){
					?>
						<tr>
							<td><?php echo ++$kounter; ?></td>
							<td><?php echo $row['pagename']; ?></td>
							<td><?php echo $row['sectiontitle']; ?></td>
							<td><?php echo $row['sectionbody']; ?></td>
							<td><?php echo $row['sectionimage']; ?></td>
							<td><?php echo $row['dateadded']; ?></td>
							<td>
								<a href="editsection.php?sectionid=<?php echo $row['sectionid']; ?>">
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
						<th>#</th>
						<th>Page name</th>
						<th>Title</th>
						<th>Body</th>
						<th>Image</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</tfoot>
				
			</table>


		</div>
			
		</div>
</div>

<?php include("adminfooter.php"); ?>