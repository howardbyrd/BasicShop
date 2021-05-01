<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
</head>
<body>
<h1>Apple Airpods<h1>
	<p><img src="airpods.jpeg" alt="Airpods"></p>
	<p>Price: $160.00</p>
	<form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
		<input type="hidden" name="business" value="sb-rbfe4409937@business.example.com">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="item_name" value="Airpods">
	<input type="hidden" name="item_number" value="1">
	<input type="hidden" name="amount" value="160">
	<input type="hidden" name="curreny_code" value="USD">
	<input type="hidden" name="cancel_return" value="http://howardbyrdwebsite-com.stackstaging.com/shop/cancel.php">
	<p><input type="image" name="submit" border="0" src="https://paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-large.png" alt="Buy Now"></p>



	</body>
</html>