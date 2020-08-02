<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/override.css">
</head>
<body>

	<h1 class="text-center edit">New/Edit(dynamic) Student Information</h1><br>
	<div class="newinfo">

	<div class="container">	


		<div class="row row-centered">
		<div class="col-md-6 col-centered">

	
	<!--use php to create dynamic h1, or create 2 forms(new info and edit info). Don't know which way would be implmented -->
	<form class=“form-horizontal” role=“form” method="post">
		

	<div class="text-warning lead">Enter new/Edit(dynamic) student's information</div>
	<div class="text-danger">* indicates required field</div>
	<br>

	<div class="form-group">
		<label class="control-label">Name *:</label>

		<div class="form-inline">
		<input class="col-sm-6 form-control" type="text" id="firstname" name="firstname" placeholder="firstname" required>
		<input class="col-sm-6 form-control" type="text" id="lastname" name="lastname" placeholder="lastname" required>
	</div>
		
	</div>
	<br>

	<div class="form-group">

		<label class="control-label" for="link">Link *: </label>
		<input class="form-control" type="text" id="link" name="link" placeholder="URL to the student's personal page" required><br>
		

	</div>

		<!-- 
			if we cannot figure out how to use photo, quote will take its place
			<label for="quote">Quote *: </label>
			<input type="text" id="quote" name="quote"> 
		--> 

		<div class="form-group">


		<label class="control-label" for="bio">Excerpt *:</label>
		<textarea class="form-control" id="bio" name="bio" rows="3" cols="50" placeholder="A short description about this student. &NewLine;Name?Major?Membership?Achievement?Hobby?" required></textarea>
		<br>

	</div>


		<!-- <label for="photo">Photo *:</label> -->
		<!-- If we are in edit.php, display the current photo on the left of file-upload button
		If we are in new.php, no photo will be shown -->
		<!-- <input type="file" name="image" accept="image/*" required> -->
		<div class="form-group">
		<label class="control-label" for="quote">Favorite Quote *:</label> 
		<textarea class="form-control" id="quote" name="quote" rows="1" cols="25" placeholder="Favorite Quote" ></textarea>
		<br>
	</div>

<div class="form-group checkbox">
		<input type="checkbox" name="confirm" id="confirm" required>
		<label for="confirm">Confirmed</label>
		<br>

	</div>

		<input class="btn btn-primary" type="submit" name="submit" value="Submit">
		<a class="btn btn-danger" href=".">Cancel</a>

	</div>	

	</form>
</div>
</div>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>