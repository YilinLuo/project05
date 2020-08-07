<?php
$formTitle = "Update";

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include('form.php');

// connect to the database
include('connect-db.php');

include('uploadfile.php');

// check if the form (from renderform.php) has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])) 
{
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_POST['id'])) 
	{
		// get form data, making sure it is valid
		$id = $_POST['id'];
		$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
		$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
		$quote = mysqli_real_escape_string($connection, htmlspecialchars($_POST['quote']));
		$link = mysqli_real_escape_string($connection, htmlspecialchars($_POST['link']));
		$bio = mysqli_real_escape_string($connection, htmlspecialchars($_POST['bio']));

		if (isset($_POST['photo-change']) && $_POST['photo-change']== '1')
		{
			$pic = handleFile();
		} 
		else 
		{
			if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) 
			{
				$id = $_GET['id'];
				$pic_data = mysqli_query($connection, "SELECT pic FROM students WHERE id=$id");
				$pic=mysqli_fetch_array($pic_data)['pic'];
			}
		}

		// check that firstname/lastname fields are both filled in
		if ($firstname == '' || $lastname == '' || $quote == '' || $link == '' || $bio == '' || $pic == '') 
		{
			// generate error message
			$error = 'ERROR: Please fill in all required fields!';

			//error, display form
			renderForm($id, $firstname, $lastname, $quote, $link, $bio, $pic, $error, $formTitle);
		} 
		else 
		{
			// save the data to the database
			$result = mysqli_query($connection, "UPDATE students SET firstname='$firstname', lastname='$lastname', quote='$quote', link='$link', bio='$bio', pic='$pic' WHERE id='$id'");

			// once saved, redirect back to the homepage page to view the results
			header("Location: studentlist.php");
		}
	} 
	else 
	{
		// if the 'id' isn't valid, display an error
		echo 'Error! id not valid';
	}
} 
else 
{
	// if the form (from renderform.php) hasn't been submitted yet, get the data from the db and display the form
	// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) 
	{
		// query db
		$id = $_GET['id'];
		$result = mysqli_query($connection, "SELECT * FROM students WHERE id=$id");
		$row = mysqli_fetch_array( $result );

		// check that the 'id' matches up with a row in the databse
		if($row) 
		{
			// get data from db
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$quote = $row['quote'];
			$link = $row['link'];
			$bio = $row['bio'];
			$pic = $row['pic'];

			// show form
			renderForm($id, $firstname, $lastname, $quote, $link, $bio, $pic, '', $formTitle);
		} 
		else 
		{
			// if no match, display result
			echo "No results!";
		}
	} 
	else 
	{
		// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
		echo 'Error! id in the URL is not valid, or there is no id value';
	}
}
?>