<?php 
// Name: Zabala, Jan Chrysler S.
// Section: CYB - 201
// Subject: 6DWEB
// Date: November 27, 2025

$treat = 'Jelly Beans';
 include 'header.php';
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zabala - Match</title>
	<link rel = "stylesheet" href = "BasicPHP1/css/styles.css">
</head>
<body>

    <?php 
    echo "Clerk: Thank you for ordering! While we're at it, what is your favorite treat? <br> <br>";
    echo "Customer: $treat!! <br> <br>";
$return_value = match ($treat) {
    'Jelly Beans' => "Clerk: Wow, Jelly Beans! Good choice!",
    'Lollipops' => "Clerk: Lollipops are the favorite order of our children customers!",
    'Candy Canes' => "Clerk: Candy Canes are the favorite order of our adult customers!",
    'Push Pops' => "Clerk: Push Pops are everyone's favorite! Good choice!",
    'Peppermints' => "Clerk: Peppermints are for the oldies!",
};

echo $return_value;
?>

</body>
    <?php include 'footer.php'; ?>
</html>
