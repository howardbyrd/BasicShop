<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
</head>
<body>
<h1>Payment success</h1>
<p>Thank you! We recieved the following payment:</p>
<p>Amount: <?php echo $_GET['amt'] ?></p>
<p>Currency: <?php echo $_GET['cc'] ?></p>
<p>Item Name: <?php echo $_GET['item_name'] ?></p>
<p>Item Number: <?php echo $_GET['item_number'] ?></p>
<p>Status: <?php echo $_GET['st'] ?></p>
<p>Transaction ID: <?php echo $_GET['tx'] ?></p>
</body>
</html>