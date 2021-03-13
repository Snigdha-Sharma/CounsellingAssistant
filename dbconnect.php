<?php

function Openconn(){
	$conn = mysqli_connect("localhost","root","","counselling");
	if(mysqli_connect_errno($conn))
	{
		echo mysqli_connect_error();
	}
	return $conn;
}

function Closecon()
{
	$conn -> close();
}

?>