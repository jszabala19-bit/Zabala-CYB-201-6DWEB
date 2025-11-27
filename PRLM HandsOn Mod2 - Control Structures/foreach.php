<?php
// Name: Zabala, Jan Chrysler S.
// Section: CYB - 201
// Subject: 6DWEB
// Date: November 27, 2025
$treats = ['Jelly Beans', 'Lollipops', 'Candy Canes', 'Push Pops', 'Peppermints'];
$treat = 'Lollipops';
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zabala - Foreach Loop</title>
	<link rel = "stylesheet" href = "BasicPHP1/css/styles.css">
</head>
<body>
<h4>Available Treats:</h4>
<ul>
<?php foreach ($treats as $item): ?>
    <li><?php echo $item; ?></li>
<?php endforeach; ?>
</ul>

<?php

    echo "Clerk: Thank you for ordering! While we're at it, what is your favorite treat? <br> <br>";
    echo "Customer: $treat!! <br> <br>";
switch ($treat) {
    case "Jelly Beans":
        echo "Clerk: Wow! Jelly Beans are a good choice!";
        break;
    case "Lollipops":
        echo "Clerk: Lollipops are the favorite order of our young customers!";
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
        echo "Clerk: Share your favorite treats";
}
?>
</body>
    <?php include 'footer.php'; ?>
</html>
