<?php
$formTitle = "Create";

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

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) 
{
	// get form data, making sure it is valid
	$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
	$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
	$quote = mysqli_real_escape_string($connection, htmlspecialchars($_POST['quote']));
	$link = mysqli_real_escape_string($connection, htmlspecialchars($_POST['link']));
	$bio = mysqli_real_escape_string($connection, htmlspecialchars($_POST['bio']));
	$pic = handleFile();

	// check to make sure both fields are entered
	if ($firstname == '' || $lastname == '' || $quote == '' || $link == '' || $bio == '' || $pic == '') 
	{
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $firstname, $lastname, $quote, $link, $bio, $pic, $error, $formTitle);
	} 
	else 
	{
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO students (firstname, lastname, quote, link, bio, pic) VALUES ('$firstname', '$lastname', '$quote', '$link', '$bio', '$pic')");

		// once saved, redirect back to the view page
		header("Location: studentlist.php");
	}
} 
else 
{
	// if the form hasn't been submitted, display the form
	renderForm('','','','','','','','', $formTitle);
}
?>