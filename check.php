<?php
		if (strlen($_POST["search"]) < 6) {
			echo "<font color='red'>User name must be at least 6 charachers long!</font>";
		} else {

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "travel-o-matic";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		$sql = "SELECT id, username FROM users WHERE username LIKE '%".$_POST["search"]."%'";
		$result = mysqli_query($conn, $sql);

		$output='';
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
				$output .= "<font color='red'>This user name is taken!</font>";

			}
			echo $output;
		}
		else
		{
			echo "<font color='green'>User name is free!</font>";
		}
		
		mysqli_close($conn);
	}
?>