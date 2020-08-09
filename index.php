<?php 
$customCSS = "<link rel='stylesheet' type='text/css' href='css/home.css'>"; 
session_start();
include "inc/html-top.php";
?>


	<section class="upper-left">
		<img src="images/icon.png" alt="csc 174">
		<div class="number-semester">
			<!-- <div class="semester">2020 Summer</div> -->
			<div class="class-number">CSC 174</div>
		</div>
	</section>


	<section class="upper-right">
		<div class="login-container">
			<?php if(isset($_SESSION['username'])) { ?>
			   <a href="logout.php"> <img src="images/login-icon.png" alt="Login Icon"> Logout</a>
			   <?php } 
			   else { ?>
			   <a href="login.php"> <img src="images/login-icon.png" alt="Login Icon"> Login</a>
			 <?php } ?>
		</div>
	</section>


	<section class="middle">
		<div class="welcome">Welcome!</div>		
	</section>



	<section class="bottom-left">
		<div class="name-reference">
			<div class="class-name">Advanced Front-End Web Design and Development</div>

			<div class="img-reference">

				<a href="https://docs.csc174.org/" target="_blank">About this course <img src="images/external-link.png" alt="external link icon"></a>
			</div>
		</div>
	</section>



	<section class="bottom-right">
		<div class="team-reference">
			<a href="studentlist.php">Our Team</a>
		</div>
	</section>

</body>
</html>
