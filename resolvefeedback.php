<?php
require_once('connect.php');

	$id = $_GET['userid1'];
	if (isset($id)) {
		$q="DELETE FROM feedback where orderID=$id";
		$q = strtolower($q);
		if(!$mysqli->query($q)){
			echo "DELETE failed. Error: ".$mysqli->error ;
	   }
	   $mysqli->close();
	   //redirect
     header("Refresh: 0; url=adminfeedback.php");
	//    echo '<h1 style="text-align: center; font-family: monospace;">DELETE SUCCESS!!</h1>';
	 }


  ?>