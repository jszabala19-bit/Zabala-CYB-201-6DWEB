<?php 
// Name: Zabala, Jan Chrysler S.
// Section: CYB - 201
// Subject: 6DWEB
// Date: November 27, 2025

$count = '10';
 include 'header.php';
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zabala - Do-While Loop</title>
	<link rel = "stylesheet" href = "BasicPHP1/css/styles.css">
</head>
<body>
    <h3> Thank you for ordering! Congratulations for being our 100th customer! Now, let's do a countdown to know what you were about to win! </h3>

    <?php 

do {
    echo "Countdown: $count <br>";
    $count--;
} while ($count >= 1);

?>

    <h3> Congratulations! You won a free pack of treat in our store! Let's spin it!</h3>

</body>
    <?php include 'footer.php'; ?>
</html>
