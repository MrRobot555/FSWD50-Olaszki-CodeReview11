 <?php

 $adminlog=false;
 
 if (isset($_SESSION['username']) != '' && $_SESSION['type'] == 'admin') { $adminlog=true;} ?>

<?php

function retrieve($data) {

 	 	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "travel-o-matic";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// $sql = "SELECT * FROM $_POST['search']";
		$sql = "SELECT * FROM $data";

		$result = mysqli_query($conn, $sql);

		$databack = mysqli_fetch_all($result);

		//print_r($databack[0]);

		return $databack;
 };


?>

<style>
	.buttoncontainer {
		display: flex;
		flex-direction: column;
	}

	.rounding {
		border-radius: 25px;
	}

</style>


<div class="container">

    <div class="row my-3 pt-1 bg-secondary rounding"> 
		<div class="col-12 mx-auto text-center">
			<h3 class="text-white">LOCATIONS</h3>
    	</div>
    </div>

	<div class="row">

<?php
$locations = retrieve('locations');
foreach ($locations as $location) {
   ?>
		<div class="col-md-3 mx-auto mt-3">
	         <div class="card mb-4 bg-dark rounding shadow">
	            <img class="card-img-top rounding p-1" src="<?php echo($location[5]); ?>" height="250px" alt="">
	            <div class="card-body">
	               <h4 class="card-title text-white"><?php echo($location[1]); ?></h4>
	               <h5 class="card-text text-white"><?php echo($location[2]. ' '); echo($location[3]); ?> <br> <?php echo($location[4]); ?></h5>

	               	<div class="buttoncontainer"> 	
		               <a href='details.php?id=<?php echo($location[0]); ?>&table=locations' class="btn btn-info btn-sm mb-1">See Details</a>
		               <!-- <button type="button" class="btn btn-primary">See Details</button> -->
		               <?php if ($adminlog) { ?>
			               <a href='edit.php?action=edit&id=<?php echo($location[0]); ?>&table=locations' class="btn btn-warning btn-sm mb-1">Edit Event</a>
			               <a href="delete.php?id=<?php echo($location[0]); ?>&table=locations" role="button" class="btn btn-danger">Delete Event</a>
		           		<?php } ?>
	           		</div>
	            </div>
	         </div>
	    </div>
<?php } ?>
		</div>


    <div class="row my-3 pt-1 bg-secondary rounding"> 
		<div class="col-12 mx-auto text-center">
			<h3 class="text-white">RESTAURANTS</h3>
    	</div>
    </div>


	<div class="row">

<?php
$restaurants = retrieve('restaurants');
foreach ($restaurants as $restaurant) {
   ?>
		<div class="col-md-3 mx-auto mt-3">
	         <div class="card mb-4 bg-dark rounding shadow">
	            <img class="card-img-top rounding p-1" src="<?php echo($restaurant[5]); ?>" height="250px" alt="">
	            <div class="card-body">
	               <h4 class="card-title text-white"><?php echo($restaurant[1]); ?></h4>
	               <h5 class="card-text text-white"><?php echo($restaurant[2]. ' '); echo($restaurant[3]); ?> <br> <?php echo($restaurant[4]); ?></h5>

	               	<div class="buttoncontainer">
	               		<!-- <button type="button" class="btn btn-primary">See Details</button>  -->          	
		               <a href='details.php?id=<?php echo($restaurant[0]); ?>&table=restaurants' class="btn btn-info btn-sm mb-1">See Details</a>
		               <?php if ($adminlog) { ?>
			               <a href='edit.php?action=edit&id=<?php echo($restaurant[0]); ?>&table=restaurants' class="btn btn-warning btn-sm mb-1">Edit Event</a>
			               <a href="delete.php?id=<?php echo($restaurant[0]); ?>&table=restaurants" role="button" class="btn btn-danger">Delete Event</a>
		           		<?php } ?>
	           		</div>
	            </div>
	         </div>
	    </div>
<?php } ?>
		</div>


    <div class="row my-3 pt-1 bg-secondary rounding"> 
		<div class="col-12 mx-auto text-center">
			<h3 class="text-white">EVENTS</h3>
    	</div>
    </div>



	<div class="row">

<?php
$events = retrieve('events');
foreach ($events as $event) {
   ?>
		<div class="col-md-3 mx-auto mt-3">
	         <div class="card mb-4 bg-dark rounding shadow">
	            <img class="card-img-top rounding p-1" src="<?php echo($event[5]); ?>" height="250px" alt="">
	            <div class="card-body">
	               <h4 class="card-title text-white"><?php echo($event[1]); ?></h4>
	               <h5 class="card-text text-white"><?php echo($event[2]. ' '); echo($event[3]); ?> <br> <?php echo($event[4]); ?></h5>

	               	<div class="buttoncontainer">
	               	   <!-- <button type="button" class="btn btn-primary">See Details</button>  -->          	
		               <a href='details.php?id=<?php echo($event[0]); ?>&table=events' class="btn btn-info btn-sm mb-1">See Details</a>
		               <?php if ($adminlog) { ?>
			               <a href='edit.php?action=edit&id=<?php echo($event[0]); ?>&table=events' class="btn btn-warning btn-sm mb-1">Edit Event</a>
			               <a href="delete.php?id=<?php echo($event[0]); ?>&table=events" role="button" class="btn btn-danger">Delete Event</a>
		           		<?php } ?>
	           		</div>
	            </div>
	         </div>
	    </div>
<?php } ?>
		</div>

	</div>