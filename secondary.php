<?php
	session_start();

	$dbhost = "66.147.242.186";
    $dbuser = "urcscon3_london";
    $dbpass = "coffee1N/21!";
    $dbname = "urcscon3_london";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query  = "SELECT * FROM students";
    $result = mysqli_query($connection, $query);

	include "inc/html-top.php"; 
?>

<a href="secondary-modify.php" class="modify-button" title=""><?php echo $_GET["tip"]?> Modify Content</a>

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

	<?php while($data = mysqli_fetch_assoc($result)) { ?>
   
		<div class="grid">

			<div class = "intrf">
				<h2><?php echo $data["firstname"], " ", $data["lastname"];?></h2>
				<p><?php echo $data["bio"];?></p>
				
			</div> 
				
			<div class="intrp">
				<p><?php echo $data["quote"];?></p>
			</div> 

			<div class="rdmore">
				<a class="read-more" href="https://<?php echo $data["link"];?>">Read More!</a>
			</div> 

		</div> 

    <?php } ?>

	</div> 
 </article>


<footer>
	<p class="footer">
	CSC 174: Advanced Front-end Web Design and Development -
	<a href="http://docs.csc174.org" target=_blank>Course home page</a>
	</p>
</footer>


<?php include "inc/scripts.php"; ?>
</body>
</html>