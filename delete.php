<?php
// connect to the database
include('connect-db.php');

// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) 
{
	// get id value
	$id = $_GET['id'];

	$pic_data = mysqli_query($connection, "SELECT pic FROM students WHERE id=$id");
	$pic=mysqli_fetch_array($pic_data)['pic'];
	unlink(realpath($pic));
	
	// delete the entry
	$result = mysqli_query($connection, "DELETE FROM students WHERE id=$id");

	// redirect back to the homepage to see the results
	header("Location: secondary.php");

} 
else 
{
	// if id isn't set, or isn't valid, redirect back to homepage
	header("Location: secondary.php");
}
?>