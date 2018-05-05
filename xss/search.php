<!DOCTYPE html>
<html>
  <head>
    <title>XSS</title>
    <script src="jquery-3.1.0.min.js"></script>
	<script>
	var output = "";
	<?php
	//?q=<script>alert(1)</script> -> return output scripting
	//?q=<script>alert(1)</sc"%2B"ript> -> success
	//to prevent:
	//if (isset($_GET['q']) && is_string($_GET['q'])) {
 	// printf('output = "%s";', htmlspecialchars($_GET['q']));
	//}
	if (isset($_GET['q'])) {
 	  printf('output = "%s";', $_GET['q']);
	}
	?>
	
	$(function()  {
	  $("#output").html(output);
	});
	</script>
  </head>
  <body>
    <p id="output"></p>
  </body>
</html>