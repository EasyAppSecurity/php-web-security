<?php
  //only current origin must be executed
  header('Content-Security-Policy: default-src \'self\'');
?><!DOCTYPE html>
<html>
  <head>
    <title>CSP</title>
	<script>
	alert(1);
	</script>
  </head>
  <body>
    <ul style="color: orange;">
	  <li>Item 1</li>
	  <li>Item 2</li>
	</ul>
  </body>
</html>