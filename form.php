<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

	<h1>New/Edit(dynamic) Student Information</h1>
	<!--use php to create dynamic h1, or create 2 forms(new info and edit info). Don't know which way would be implmented -->

	<div>Enter new/Edit(dynamic) student's information below and submit to create a new entry</div>
	<div>* indicates required field</div>
	<br><br>
	<form action="" method="post">
		<label>Name *:</label>
		<input type="text" id="firstname" name="firstname" placeholder="firstname" required>
		<input type="text" id="lastname" name="lastname" placeholder="lastname" required>
		<br><br>

		<label for="link">Link *: </label>
		<input type="text" id="link" name="link" placeholder="URL to the student's personal page" required>
		<br><br>

		<!-- 
			if we cannot figure out how to use photo, quote will take its place
			<label for="quote">Quote *: </label>
			<input type="text" id="quote" name="quote"> 
		--> 


		<label for="bio">Excerpt *:</label>
		<textarea id="bio" name="bio" rows="3" cols="50" placeholder="A short description about this student. &NewLine;Name?Major?Membership?Achievement?Hobby?" required></textarea>
		<br><br>


		<label for="photo">Photo *:</label>
		<!-- If we are in edit.php, display the current photo on the left of file-upload button
		If we are in new.php, no photo will be shown -->
		<input type="file" name="image" accept="image/*" required>
		<br><br>


		<input type="checkbox" name="confirm" id="confirm" required>
		<label for="confirm">Confirmed</label>
		<br><br>

		<input type="submit" name="submit" value="Submit">
		<a href=".">Cancel</a>

	</form>

</body>
</html>