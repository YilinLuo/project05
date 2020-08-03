<?php

	include('connect-db.php');

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: secondary.php?tip=Login Before");
    exit;
}
?>

<?php include "inc/html-top.php"; ?>

<article>
	<header class="blacktop2">
		<div class = "blackcontent">
			<div class="homebtn">
				<a href="index.php">Home</a>
			</div>

			<div class="secondary-login">
				<?php if(isset($_SESSION['username'])) { ?>
			      <a href="logout.php">Logout</a>
			    <?php } 
			    else { ?>
			      <a href="login.php">Login</a>
			    <?php } ?>
			</div>
		</div>
	</header>

	<div class="container">

		<h1 class="London">London</h1>

			<?php while($data = mysqli_fetch_array($result)) {?>
				<div class="grid">

					<!-- <?php echo $data['pic']; ?> -->
					<img src="<?php echo $data['pic']; ?>" alt="">


					<div class = "intrf">
						<h2><?php echo $data["firstname"], " ", $data["lastname"];?></h2>
						<p><?php echo $data["bio"];?></p>
					</div> 
						
					<div class="intrp">
							<p><?php echo $data["quote"];?></p>
					</div> 

					<div class="rdmore">
						<a class="read-more" href="https://<?php echo $data["link"];?>">Read More!</a>

						<div>
							<a class = "edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
							<a class = "delete" onclick="return confirm('Are you sure you want to delete: <?php echo $data["firstname"] . " " . $data["lastname"]; ?>?')" href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
						</div> 
					</div>
				</div> 
			<?php } ?>

	</div> 

 </article>


<footer>
	<a href="new.php" class="new" title="Add new student's information">Add New Entry</a>
	<a href="secondary.php" class="done-button" title="Done with modify. Back to original page.">Done</a>
</footer>


<?php include "inc/scripts.php"; ?>

</body>

</html>