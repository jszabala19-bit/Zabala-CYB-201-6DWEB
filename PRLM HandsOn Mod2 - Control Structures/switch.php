<?php 
// Name: Zabala, Jan Chrysler S.
// Section: CYB - 201
// Subject: 6DWEB
// Date: November 27, 2025

$treat = 'Push Pops';
 include 'header.php';
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zabala - Switch </title>
	<link rel = "stylesheet" href = "BasicPHP1/css/styles.css">
</head>

<body>

    <?php 
    echo "Clerk: Thank you for ordering! While we're at it, what is your favorite treat? <br> <br>";
    echo "Customer: $treat!! <br> <br>";
    switch ($treat) {
  case "Jelly Beans":
    echo "Clerk: Wow! Jelly Beans' a good choice!";
  case "Lollipops":
    echo "Clerk: Lollipops are the favorite order of our children customers!";
    break;
  case "Candy Canes":
    echo "Clerk: Candy Canes are the favorite order of our adult customers!";
    break;
  case "Push Pops":
    echo "Clerk: Push Pops are everyone's favorite! Good choice!";
    break;
  case "Peppermints":
    echo "Clerk: Peppermints are for the oldies!";
    break;
  default:
    echo "Clerk: Share your favorite treat";
}
    ?>
</body>
    <?php include 'footer.php'; ?>
</html>