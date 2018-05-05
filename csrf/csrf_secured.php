<?php
    session_start();
?><!DOCTYPE html>
<html>
<head>
    <title>CSRF</title>
</head>
<body>
<?php
    /* 
	  if random_bytes() is not available (PHP < 7), use userland 
	  implementation from https://github.com/paragonie/random_compat
	*/
	
	if (isset($_POST['btn'])) {
		if (isset($_POST['_csrfname']) && isset($_POST['_csrfvalue']) &&
		    isset($_SESSION[$_POST['_csrfname']]) && 
			$_SESSION[$_POST['_csrfname']] === $_POST['_csrfvalue'] && 
			$_POST['_csrfvalue'] !== '') {
				echo '<h1>Confirmed</h1>';
			} else {
				throw new Exception('CSRF token validation failed');
			}
	}

	$name = 'token-' . mt_rand();
    $token = bin2hex(random_bytes(32));
    $_SESSION[$name] = $token;
	
?>
	<form action="" method="post">
	
	    <input type="hidden"
	           name="_csrfname"
		       value="<?php echo $name; ?>">
        <input type="hidden"
	           name="_csrfvalue"
		       value="<?php echo $token; ?>">
		   
		<input name="btn" type="submit" value="Confirm">
	</form>
</body>
</html>