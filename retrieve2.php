<?php


		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "travel-o-matic";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// $sql = "SELECT * FROM $_POST['search']";
		$sql = "SELECT * FROM restaurants";

		$result = mysqli_query($conn, $sql);

		$databack = mysqli_fetch_all($result);

		//echo $databack;

		$databack2 =  json_encode($databack);

		$databack = stripslashes($databack2);

		echo $databack;


?>