<?php


		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "travel-o-matic";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// $sql = "SELECT * FROM $_POST['search']";
		$sql = "SELECT * FROM events";

		$result = mysqli_query($conn, $sql);

		$databack = mysqli_fetch_all($result);

		$databack2 =  json_encode($databack);

		$databack = stripslashes($databack2);

		echo $databack;


?>