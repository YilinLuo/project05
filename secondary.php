<?php
	$dbhost = "66.147.242.186";
    $dbuser = "urcscon3_london";
    $dbpass = "coffee1N/21!";
    $dbname = "urcscon3_london";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query  = "SELECT * FROM students";
    $result = mysqli_query($connection, $query);
?>

<?php include "inc/html-top.php"; ?>

<a href="secondary-modify.php" class="modify-button" title="I view this as a developer tool. So I decide to put this button on the right side without destroying the look of centered actual centent">Modify Content</a>

<article>
	<header class="blacktop2">
		<div class = "blackcontent">
			<div class="homebtn">
				<a href="index.php">Home</a>
			</div>

			<h1 class="London">London</h1>
		</div>
	</header>

	<?php
        while($data = mysqli_fetch_assoc($result)) {
    ?>

	<div class="container">

		<div class="grid">

			<div class = "intrf">
				<p><?php echo $data["quote"];?></p>
				<h2><?php echo $data["firstname"], " ", $data["lastname"];?></h2>
			</div> 
				
			<div class="intrp">
				<p><?php echo $data["bio"];?></p>
			</div> 

			<div class="rdmore">
				<a href="https://<?php echo $data["link"];?>"><div>Read More!</div></a>
			</div> 

		</div> 

	</div> 

    <?php } ?>
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