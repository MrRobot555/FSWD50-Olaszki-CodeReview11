<?php

if (isset($_SESSION['username']) != '' && $_SESSION['type'] == 'admin') {

function retrieveusers($data) {

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

.toggle.btn {
	color: white!important;
    background-color: red!important; }

.switchontainer {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		align-items: center;
		color: white;
	}

</style> 


<div class="container">

	

	   <div class="row my-3 pt-1 bg-secondary rounding"> 
		<div class="col-12 mx-auto text-center">
			<h3 class="text-white">USERS</h3>
    	</div>
    </div>



	<div class="row">

<?php

$users = retrieveusers('users');
// print_r($users);

foreach ($users as $user) {
   ?>
		<div class="col-md-3 mx-auto mt-3">
	         <div class="card mb-4 bg-dark rounding shadow">
	            <img class="card-img-top rounding p-1" src="<?php echo($user[4]); ?>" height="250px" alt="">
	            <div class="card-body">
	               <h4 class="card-title text-white text-center mb-4"><?php echo($user[1]); ?></h4>

	               	 <?php if ($user[3]=='admin') {$state = 'checked';} else {$state = '';} ?>
	               	<div class="switchontainer">
	               	 							               	 									
						<div><input type="checkbox" <?php echo($state); ?> data-toggle="toggle" onchange="window.location.href = 'switchrole.php?id=<?php echo($user[0]); ?>&current=<?php echo($user[3]); ?>';"> </div>
						<div><h5>ADMIN RIGHT</h5></div>

					</div>
						
					<?php $feedback=''; if ($returning==true && ($backid==$user[0])) {$feedback = 'user role changed';} ?>
					<h5 class="text-white text-center text-danger pt-2" id="out<?php echo($user[0]); ?>"><?php echo($feedback); ?></h5>	

	            </div>
	         </div>
	    </div>
<?php } ?>
		</div>

	</div>

						


<?php


}

?>