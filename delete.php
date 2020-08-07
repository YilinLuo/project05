<?

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

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
	header("Location: studentlist.php");

} 
else 
{
	// if id isn't set, or isn't valid, redirect back to homepage
	header("Location: studentlist.php");
}
?>