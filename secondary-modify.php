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
		
		<div class="grid">
			<div class="intrf">
	        	<h2>Michael Bashner</h2>
		        <figure >
		        	<img src="images/mb.jpg" alt="Michael Bashner">
		        </figure>
	        </div>

	        <div class="intrp">
	        	<p class="description">Michael Bashner is a student at the University of Rochester majoring in Computer Science, minoring in Linguistics, and clustering in Gender, Sexuality, and Women's Studies.</p>
	    	</div>

	    	<div class="rdmore">
	        	<a href="mb.php" class="read-more">Read more</a>
	        	<div>
	  				<a href="edit.php" class="edit">Edit</a>
	  				<a href="delete.php" class="delete">Delete</a>
	  			</div>
	        </div>
	    </div>


    	<div class="grid">
    		<div class="intrf">
	        	<h2>Molly Kilian</h2>
	        	<figure>
	        		<img src="images/headshot.jpg" alt="Molly Kilian">
	        	</figure>
	        </div>

	        <div class="intrp">
		        <p class="description">Molly Kilian is a rising sophomore at the University of Rochester, interested in a wide variety of subjects. She is planning to major in some form of humanities or social science, and to minor in Computer Science and/or Digital Media Studies.</p>
		    </div>

		    <div class="rdmore">
		      	<a href="mk.php" class="read-more">Read more</a>
		      	<div>
	  				<a href="edit.php" class="edit">Edit</a>
	  				<a href="delete.php" class="delete">Delete</a>
	  			</div>
		    </div>
		</div>
 

 		<div class="grid">
    		<div class="intrf">
	        	<h2>Joo Eon Park</h2>
		        <figure>
		        	<img src="images/jp_self.jpg" alt="Joo Eon Park">
		        </figure>
		    </div>

		    <div class="intrp">
		        <p class="description">Joo Eon Park is a rising junior at the University of Rochester, majoring in Computer Science and minoring in Digital Media Studies. </p>
		    </div>

		    <div class="rdmore">
		        <a href="jp.php" class="read-more">Read more</a>
		        <div>
	  				<a href="edit.php" class="edit">Edit</a>
	  				<a href="delete.php" class="delete">Delete</a>
	  			</div>
		    </div>
	    </div>
   	</div>
 </article>


<footer>
	<a href="new.php" class="new" title="Add new student's information">Add New Entry</a>
	<a href="secondary.php" class="done-button" title="Done with modify. Back to original page.">Done</a>
</footer>


<?php include "inc/scripts.php"; ?>
</body>
</html>