<?php
ob_start();
session_start();

if (isset($_SESSION['username']) != '' && $_SESSION['type'] == 'admin') {

//autherntication should be checked here !

include_once 'head.php';
include_once 'header_ad.php';

if($_GET['id']) {

	require_once 'connect.php';
	include_once 'scripts.php';

    $id = $_GET['id'];
    $table = $_GET['table'];

    $sql = "SELECT * FROM {$table} WHERE id = {$id}";

    //echo $sql;

    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

    $conn->close();

    // print_r($data);

?>

<style>
	body {
		  background-image: url("https://www.kalory.co.uk/wp-content/uploads/2017/03/red-carpet-event-photographer.jpg");
		  background-position: center; 
		  background-repeat: no-repeat; 
		  background-size: cover;
	}

/* 	div {
		border: 1px solid red!important;
	} */
	
	.vcenter {
	    display: flex;
		align-items: center;
		height: 98vh;
		justify-content: center;
	}

	.formattrib {
		padding: 20px;
		background: rgba(200, 54, 54, 0.5);
		border-radius: 15px;
		min-width: 30vw;
	}

	.bottmarg {
		padding-bottom: 1vw;
		color: white;
		letter-spacing: 5px;
		font-weight: bold;
		font-size: 2vw;
	}

	input[type="text"], input[type="date"], input[type="time"] { 
		background-color : rgba(255, 255, 255, 0.6)!important;
	}

	label {
		font-size: 1vw;
		margin-bottom: 0.1vw!important;
	}

	input.rounded {
		border: 1px solid #ccc;
		-moz-border-radius: 25px;
		-webkit-border-radius: 25px;
		border-radius: 25px;
		-moz-box-shadow: 2px 2px 3px #666;
		-webkit-box-shadow: 2px 2px 3px #666;
		box-shadow: 2px 2px 3px #666;
		font-size: 1vw!important;
		color: black;
		padding: 0.2vw 7px!important;
		outline: 0;
		-webkit-appearance: none;
}

	input.rounded:focus {
		border: 2px solid yellow;
		background-color : rgba(255, 255, 255, 0.8)!important;
}

	.mybutt {
		font-size: 1.3vw;
		margin-top: 1vw!important;
		border-radius: 15px;
		letter-spacing: 5px;
		font-weight: bold;
	}

	.buttspacing {
		height: 1vw;
	}

	.form-group {
		margin-bottom: 0.5vw!important;
	}

	.form-control {
		height: 4vh;
	}


</style>

<?php //if new addition is happening

if($_GET['action'] == 'add') {

    $data = array("name"=>"","city"=>"","ZIP"=>"","address"=>"","image"=>"","phone"=>"","type"=>"","weblink"=>"","author"=>"","location"=>"","date"=>"","time"=>"","price"=>"");

 // 	$data['name'] = '';
	// $data['city'] = '';
	// $data['ZIP'] = '';
	// $data['address'] = '';
	// $data['image'] = '';
	// $data['phone'] = '';
	// $data['type'] = '';
	// $data['weblink'] = '';
	// $data['author'] = '';
	// $data['location'] = '';
	// $data['date'] = '';
	// $data['time'] = '';
	// $data['price'] = '';

	$myaction = 'add';

} else {
	$myaction = 'edit';
}



?>


<div class="container text-white">
	<div class="col-12 vcenter">
		<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 formattrib">
			<h3 class="text-center bottmarg"><?php echo(strtoupper($myaction)); ?> <?php echo(strtoupper($table)); ?></h3>
			<form class="col-12" action="a_update.php?table=<?php echo($table); ?>&action=<?php echo($myaction); ?>" method="post">

			<input type="hidden" name="id" value="<?php echo($id); ?>"> <!-- id hidden for every table -->

			<?php if ($table=='locations' || $table=='restaurants') {
			  ?>
			  <div class="form-group">
			    <label for="name">Name of place</label>
			    <input type="text" class="form-control rounded" name="name" value="<?php echo($data['name']); ?>">
			  </div>
			  <div class="form-group">
			    <label for="city">City</label>
			    <input type="text" class="form-control rounded" name="city" value="<?php echo($data['city']); ?>">
			  </div>
			  <div class="form-group">
			  	<label for="zip">ZIP code</label>
			    <input type="text" class="form-control rounded" name="zip" value="<?php echo($data['ZIP']); ?>">
			  </div>
			    <div class="form-group">
			  	<label for="address">Street address</label>
			    <input type="text" class="form-control rounded" name="address" value="<?php echo($data['address']); ?>">
			  </div>
			    <div class="form-group">
			  	<label for="image">Image link</label>
			    <input type="text" class="form-control rounded" name="image" value="<?php echo($data['image']); ?>">
			  </div>
			<?php }
			?>

			<?php if ($table=='restaurants') {
				?>
			  <div class="form-group">
			  	<label for="phone">Phone number</label>
			    <input type="text" class="form-control rounded" name="phone" value="<?php echo($data['phone']); ?>">
			  </div>
			  <div class="form-group">
			  	<label for="type">Type of food</label>
			    <input type="text" class="form-control rounded" name="type" value="<?php echo($data['type']); ?>">
			  </div>
			  <div class="form-group">
			  	<label for="weblink">Web link</label>
			    <input type="text" class="form-control rounded" name="weblink" value="<?php echo($data['weblink']); ?>">
			  </div>
			 <?php }
			?>

			<?php if ($table=='events') {
				?>
			  <div class="form-group">
			  	<label for="author">Author's name</label>
			    <input type="text" class="form-control rounded" name="author" value="<?php echo($data['author']); ?>">
			  </div>
			  <div class="form-group">
			  	<label for="location">Name of location</label>
			    <input type="text" class="form-control rounded" name="location" value="<?php echo($data['location']); ?>">
			  </div>
			  <div class="form-group">
			  	<label for="city">City</label>
			    <input type="text" class="form-control rounded" name="city" value="<?php echo($data['city']); ?>">
			  </div>
			  <div class="form-group">
			  	<label for="ZIP">ZIP code</label>
			    <input type="text" class="form-control rounded" name="ZIP" value="<?php echo($data['ZIP']); ?>">
			  </div>
			  <div class="form-group">
			  	<label for="date">Date</label>
			    <input type="date" class="form-control rounded" name="date" value="<?php echo($data['date']); ?>">
			  </div>
			  <div class="form-group">
			  	<label for="time">Time</label>
			    <input type="time" class="form-control rounded" name="time" value="<?php echo($data['time']); ?>">
			  </div>
			  <div class="form-group">
			  	<label for="price">Ticket price</label>
			    <input type="text" class="form-control rounded" name="price" value="<?php echo($data['price']); ?>">
			  </div>
			  <div class="form-group">
			  	<label for="image">Event image link</label>
			    <input type="text" class="form-control rounded" name="image" value="<?php echo($data['image']); ?>">
			  </div>  
			 <?php }
			?>
			  <div class="buttspacing"></div>
			  <button type="submit" class="btn btn-primary btn-block mybutt"><?php echo(strtoupper($myaction)); ?> DATA</button>
			</form>
		</div>
	</div>
</div>



<?php 

include_once 'footer.php';


} // else there was no parameters sent

} else {
	header("Location: index.php");
}
?>