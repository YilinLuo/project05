<?php
include('form.php');

// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) 
{
	// get form data, making sure it is valid
	$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
	$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
	$quote = mysqli_real_escape_string($connection, htmlspecialchars($_POST['quote']));
	$link = mysqli_real_escape_string($connection, htmlspecialchars($_POST['link']));
	$bio = mysqli_real_escape_string($connection, htmlspecialchars($_POST['bio']));

	// check to make sure both fields are entered
	if ($firstname == '' || $lastname == '' || $quote == '' || $link == '' || $bio == '') 
	{
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $firstname, $lastname, $quote, $link, $bio, $error);

	} 
	else 
	{
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO students (firstname, lastname, quote, link, bio) VALUES ('$firstname', '$lastname', '$quote', '$link', '$bio')");

		// once saved, redirect back to the view page
		header("Location: secondary.php");
	}
} 
else 
{
	// if the form hasn't been submitted, display the form
	renderForm('','','','','','','');
}
?>