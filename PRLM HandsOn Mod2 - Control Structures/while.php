<?php 
// Name: Zabala, Jan Chrysler S.
// Section: CYB - 201
// Subject: 6DWEB
// Date: November 27, 2025

$treats = ["Jelly Beans", "Lollipops", "Candy Canes", "Push Pops", "Peppermints"];
$tries = 0;
$free_treat = "";

include 'header.php';
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zabala - While Loop</title>
    <link rel="stylesheet" href="BasicPHP1/css/styles.css">
</head>
<body>

<h3>Spinning...</h3>

<?php

while ($tries < 1) {
    $random_index = rand(0, count($treats) - 1);
    $free_treat = $treats[$random_index];
    $tries++;
}
?>

<h3>Congratulations! You received a free treat: <strong><?php echo $free_treat; ?></strong></h3>

<?php
switch ($free_treat) {
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
        echo "Clerk: Share your favorite treat!";
}
?>

</body>
<?php include 'footer.php'; ?>
</html>
