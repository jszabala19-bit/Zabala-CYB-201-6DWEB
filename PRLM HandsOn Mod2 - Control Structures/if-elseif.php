<?php 
// Name: Zabala, Jan Chrysler S.
// Section: CYB - 201
// Subject: 6DWEB
// Date: November 27, 2025

$mode = 'Gcash';
 include 'header.php';
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zabala - If-ElseIf Statement</title>
	<link rel = "stylesheet" href = "BasicPHP1/css/styles.css">
</head>
<body>

    <?php 
    echo "Clerk: Thank you for ordering! What's your mode of payment [Card/Cash/Gcash]? <br> <br>";
    echo "Customer: $mode please. <br> <br>";
    if ($mode === 'Cash' ) {
  echo "Clerk: Your total cost is ₱560. Please wait for your receipt. Thank you for buying! Come again!";
} elseif ($mode === 'Gcash') {
  echo "Clerk: Kindly use this QR code for your payment. Thank you! Come again!";
} elseif ($mode === 'Card') {
  echo "Clerk: Kindly scan your card over here. Thank you and have a good day!";
} else {
  echo "Clerk: Thank you! Have a good day!";
}
  echo "<br> <br> Customer: Thank you!"
    ?>
</body>
    <?php include 'footer.php'; ?>
</html>