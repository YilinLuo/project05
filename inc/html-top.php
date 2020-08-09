<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $customTitle; ?> CSC 174 - Project 4 London</title>
		<link rel="icon" href="images/icon.png">
		<?php echo $customCSS; ?>

		<?php if($formTitle == "Update") { ?>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function()
			{
				$("form div input[type='file']").prop("type", "hidden");
				document.getElementById("photo-label").hidden = true;
				document.getElementById("photo-label").style = "display:none";
				$(".photo-change").click(function()
				{
					if($(this).prop("checked") == true)
					{
						$("form div input[type='hidden']").prop("type", "file");
						document.getElementById("photo-label").hidden = false;
						document.getElementById("photo-label").style = "display:block";
					}
					else if($(this).prop("checked") == false)
					{
						$("form div input[type='file']").prop("type", "hidden");
						 document.getElementById("photo-label").hidden = true;
						 document.getElementById("photo-label").style = "display:none";
					}
				});
			});
		</script>
	<?php } ?>

	</head>

	<body>
		
	
