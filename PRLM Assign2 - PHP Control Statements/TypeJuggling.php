<?php
// NAME: Zabala, Jan Chrysler S.
// SECTION: CYB-201
// SUBJECT: 6DWEB
// DATE: November 29, 2025

$name = "JC";
$orders = ['Jelly Beans', 'Lollipops', 'Candy Canes', 'Push Pops', 'Peppermints'];
$itemJelly = 10;
$itemLollipop = '10';
$itemCane = "25";
$itemPops = '50';
$itemPeppermint = 20;

$totalJelly = 100;
$totalLollipop = 100;
$totalCane = 100;
$totalPops = 100;
$totalPeppermint = 100;

$subtotal = ($totalJelly + $totalLollipop + $totalCane + $totalPops + $totalPeppermint);
$tax = ($subtotal * 0.12);
$totalCost = $subtotal + $tax;

$treats = ["Jelly Beans", "Lollipops", "Candy Canes", "Push Pops", "Peppermints"];
$tries = 0;
$free_treat = "";

while ($tries < 1) {
    $random_index = rand(0, count($treats) - 1);
    $free_treat = $treats[$random_index];
    $tries++;
}

switch ($free_treat) {
    case "Jelly Beans":
        $freeMessage = "Wow! You got Jelly Beans for free! Lucky you!";
        break;
    case "Lollipops":
        $freeMessage = "Yay! Lollipops are yours for free!";
        break;
    case "Candy Canes":
        $freeMessage = "Candy Canes! Enjoy your classic sweetness!";
        break;
    case "Push Pops":
        $freeMessage = "Push Pops are everyone's favorite! You got one free!";
        break;
    case "Peppermints":
        $freeMessage = "Peppermints for the wise ones! Sweet luck!";
        break;
    default:
        $freeMessage = "Hmm, we didn't pick a free treat, maybe next time!";
}
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maskulado's Sweet Treats</title>
    <link rel="stylesheet" href="BasicPHP1/css/styles.css">
</head>

<body>

<nav>
    <a href="Variables_&_Arrays.php">Home</a>
    <a href="Shorthand_Echo.php">Menu Choice</a>
    <a href="Expressions_&_Operators.php">Payment</a>
    <a href="TypeJuggling.php">Raffle</a>
</nav>

<h2>Hey <?= $name ?>! Welcome back to Maskulado's Sweet Treats!</h2>

<p>Here are your orders (yep, calculated them all hehe):</p>
<ul>
    <li>100g of <?= $orders[0] ?> = ₱<?= $itemJelly ?></li>
    <li>10pcs of <?= $orders[1] ?> = ₱<?= $itemLollipop ?></li>
    <li>1pack of <?= $orders[2] ?> = ₱<?= $itemCane ?></li>
    <li>1pack of assorted <?= $orders[3] ?> = ₱<?= $itemPops ?></li>
    <li>50g of <?= $orders[4] ?> = ₱<?= $itemPeppermint ?></li>
</ul>

<p>Total prices for each item:</p>
<ul>
    <li>100g of <?= $orders[0] ?> = ₱<?= $totalJelly ?></li>
    <li>10pcs of <?= $orders[1] ?> = ₱<?= $totalLollipop ?></li>
    <li>1pack of <?= $orders[2] ?> = ₱<?= $totalCane ?></li>
    <li>1pack of assorted <?= $orders[3] ?> = ₱<?= $totalPops ?></li>
    <li>50g of <?= $orders[4] ?> = ₱<?= $totalPeppermint ?></li>
</ul>

<p>SubTotal Cost: ₱<?= $subtotal ?></p>
<p>Tax: ₱<?= $tax ?></p>
<p>--------------------------------------------------------------</p>
<p>Total Cost: ₱<?= $totalCost ?></p>
<p>--------------------------------------------------------------</p>

<h3>CONGRATULATIONS! You are our 100th customer today! Raffle Time! Let’s spin for your free treat…</h3>
<p>Countdown:</p>
<?php
$count = 10;
do {
    echo "$count<br>";
    $count--;
} while ($count >= 1);
?>

<p>Congrats! You got a free treat: <strong><?= $free_treat ?></strong></p>
<p>Clerk: <?= $freeMessage ?></p>

<p>Thanks a bunch for buying! Hope to see you again soon :)</p>
<p>Oh and hehe, don’t forget to tell your friends about us!</p>

<?php include 'footer.php'; ?>
</body>
</html>
