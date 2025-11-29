<?php
// NAME: Zabala, Jan Chrysler S.
// SECTION: CYB-201
// SUBJECT: 6DWEB
// DATE: November 29, 2025

$name = "Jc";
$orders = [
    'JellyBeans' => 10,
    'Lollipops' => 10,
    'CandyCanes' => 25,
    'PushPops' => 50,
    'Peppermints' => 20,
];
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maskulado’s Sweet Treats</title>
    <link rel="stylesheet" href="BasicPHP1/css/styles.css">
</head>
<body>

<nav>
    <a href="Variables_&_Arrays.php">Home</a>
    <a href="Shorthand_Echo.php">Menu Choice</a>
    <a href="Expressions_&_Operators.php">Payment</a>
    <a href="TypeJuggling.php">Raffle</a>
</nav>

<h2>Hello <?php echo $name ?>! Welcome to Maskulado’s Sweet Treats!!</h2>

<p>Here at Maskulado’s, we have some super yummy treats for you :D Check them out below</p>

<ul>
<?php 
foreach ($orders as $item => $price) {
    echo "<li>$item = ₱$price</li>";
}
?>
</ul>

<p>Take your time... hmm.. think about which treat you want. Your adventure in sweetness starts now!!</p>

</body>
<?php include 'footer.php'; ?>
</html>
