<?php

session_start(); 

// creates the edit record form
function renderForm($id, $firstname, $lastname, $quote, $link, $bio, $pic, $error, $formTitle) {
?>

<?php $customTitle = "Form";

$customCSS = "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'  integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>

<link rel='stylesheet' href='css/override.css'>"; 

include "inc/html-top.php"; ?>

	<?php
		// if there are any errors, display them
		if ($error != '') {
			echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
		}
	?>

	<h1 class="text-center edit"><?php echo $formTitle?> Student Information</h1>
	
	<br>
	
		<div class="newinfo">

			<div class="container">	

				<div class="row row-centered">

					<div class="col-md-6 col-centered">
	
						<!--use php to create dynamic h1, or create 2 forms(new info and edit info). Don't know which way would be implmented -->
						<form class=“form-horizontal” action="" method="post" enctype="multipart/form-data">
		
							<input type="hidden" name="id" value="<?php echo $id; ?>">

							<div class="text-warning lead"><?php echo $formTitle?> student's information</div>
							<div class="text-danger">* indicates required field</div>
						
							<br>

							<div class="form-group">
								<label class="control-label">Name *:</label>

								<div class="form-inline">
									<input class="col-sm-6 form-control" type="text" id="firstname" name="firstname" placeholder="First name" value="<?php echo $firstname; ?>" required>

									<input class="col-sm-6 form-control" type="text" id="lastname" name="lastname" placeholder="Last name" value="<?php echo $lastname; ?>" required>
								</div>
			
							</div>

							<br>

							<div class="form-group">

								<label class="control-label" for="link">Link *: </label>
								
								<div class="form-row">
									
									<div class="col-sm-1.5 http-prefix">https://</div>
									
									<input class="d-inline form-control col-sm-10" type="text" id="link" name="link" placeholder="link to Lab 5. Don't include 'https://'" value="<?php echo $link; ?>" required><br>
								</div>

							</div>

						<!-- 
							if we cannot figure out how to use photo, quote will take its place
							<label for="quote">Quote *: </label>
							<input type="text" id="quote" name="quote"> 
						--> 

							<div class="form-group">

								<label class="control-label" for="bio">Excerpt *:</label>
						
								<textarea class="form-control" id="bio" name="bio" rows="3" cols="50" placeholder="A short description about the student. &NewLine;Examples: Name? Major? Membership? Achievements? Hobies?"  required><?php echo $bio; ?></textarea>
						
								<br>

							</div>


				<!-- <label for="photo">Photo *:</label> -->
				<!-- If we are in edit.php, display the current photo on the left of file-upload button
				If we are in new.php, no photo will be shown -->
				<!-- <input type="file" name="image" accept="image/*" required> -->

							<div class="form-group">

								<label class="control-label" for="quote">Favorite Quote *:</label> 
								<textarea class="form-control" id="quote" name="quote" rows="1" cols="25" placeholder="Favorite Quote" ><?php echo $quote; ?></textarea>
								
								<br>

							</div>

							<div class="form-group checkbox">
								<?php if($formTitle == "Update") { ?>
									<label><input type="checkbox" name="photo-change" class="photo-change" value="1">I want to replace the current photo.</label>
								<?php } ?>
								<label for="photo" class="label" id="photo-label">Upload a pic: *</label><input type="file" name="photo" id="photo" class="button">
							</div>

							<input class="btn submit_button float-left" type="submit" name="submit" value="Submit">
							<a class="btn cancel_button float-right" href="studentlist.php">Cancel</a>

						</div>	

					</form>
			</div>
		</div>

	</div>


	<?php include "inc/scripts.php" ?>

	<?php if($formTitle == "Update") { ?>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
				$("form div input[type='file']").prop("type", "hidden");
				document.getElementById("photo-label").hidden = true;
				document.getElementById("photo-label").style = "display:none";
				$(".photo-change").click(function(){
					if($(this).prop("checked") == true){
						$("form div input[type='hidden']").prop("type", "file");
						document.getElementById("photo-label").hidden = false;
						document.getElementById("photo-label").style = "display:block";
					}
					else if($(this).prop("checked") == false){
						$("form div input[type='file']").prop("type", "hidden");
						 document.getElementById("photo-label").hidden = true;
						 document.getElementById("photo-label").style = "display:none";
					}
				});
			});
		</script>
	<?php } ?>


</body>

</html>

<?php
}
?>