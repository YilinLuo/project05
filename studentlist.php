<?php

	// Initialize the session
	session_start();

	include('connect-db.php');

	$customTitle = "Student List";

	$customCSS = "<link rel='stylesheet' href='css/styles.css'>	
		<link rel='stylesheet' href='css/navigation.css'> <link rel='stylesheet' href='css/override.css'> <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>";

	include "inc/html-top.php";
?>

	<header class="heading">
		<nav class="navbar navbar-expand-sm menu">
			<a class="navbar-brand" href="index.php"> 
				<figure class="logo">
					<img src="images/icon.png" alt="logo">
				</figure>
			</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a href="studentlist.php">Student List</a>
				</li>
				<li class="nav-item">
					<?php if(isset($_SESSION['username'])) { ?>
			      <a href="logout.php"> <img src="images/login-icon.png" alt="Login Icon"> Logout</a>
			    <?php } 
			    else { ?>
			      <a href="login.php" > <img src="images/login-icon.png" alt="Login Icon"> Login</a>
			    <?php } ?>
			   </li>
			  </ul>
		</nav>
	
	</header>

<article>
	<div class="container">

		<h1 class="london">London</h1>

			<?php while($data = mysqli_fetch_array($result)) {?>
				<div class="grid">

					<div class = "name_pic_column">
						<h2><?php echo $data["firstname"], " ", $data["lastname"];?></h2>
						<figure>
							<img src="<?php echo $data['pic']; ?>" alt="">
							<figcaption><?php echo $data["quote"];?></figcaption>
						</figure>
					</div> 
						
					<div class="bio_column">
						<p><?php echo $data["bio"];?></p>
					</div> 

					<div class="readmore_column">
						<a class="read-more" target="_blank" href="https://<?php echo $data["link"];?>">Read More!<img src="images/external-link.png" alt="external link icon"></a>
							<?php if(isset($_SESSION['username'])) { ?>

						<div>
							<a class = "edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
							<a class = "delete" onclick="return confirm('Are you sure you want to delete: <?php echo $data["firstname"] . " " . $data["lastname"]; ?>?')" href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
					
</div> 
				<?php } ?>
					
					</div>
				</div> 
<?php } ?>

	</div> 

 </article>



<footer>
	<!-- if logged in, footer allows a user to make a new account. If not logged in,
		user (visitor) can visit Course Documentation website -->
	<?php
	if(isset($_SESSION['username'])) { ?>
		<a href="new.php" class="new" title="Add new student's information">&#43; Add New Entry</a>
	<?php } else { ?>
		<p class="footer">
		CSC 174: Advanced Front-end Web Design and Development -
		<a href="http://docs.csc174.org" target=_blank>Course home page <img src="images/pink-external.png" alt="external link icon"></a>
		</p>
	<?php } ?>
</footer>



<?php include "inc/scripts.php"; ?>
</body>
</html>