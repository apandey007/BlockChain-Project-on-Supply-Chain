<?php
	function openConnection(){
		$host="localhost";
		$user="root";
		$pw="abhishek@4321";
		$db="supplychain";

		$con = new mysqli($host, $user, $pw,$db);
		if(!$con){
			die("something went wrong");          // Die is used to terminate the page and show the error
		}
		return $con; 
	}

	function closeConnection($con){
		$con -> close();
	}
?>
<!-- Developed by Anubhav Dutta : https://www.linkedin.com/in/iamanubhavdutta/ -->