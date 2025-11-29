<?php
// NAME: Zabala, Jan Chrysler S.
// SECTION: CYB-201
// SUBJECT: 6DWEB
// DATE: November 29, 2025

$name = "JC";
$orders = ['Jelly Beans', 'Lollipops', 'Candy Canes', 'Push Pops', 'Peppermints'];
$itemJelly = 10;
$itemLollipop = 10;
$itemCane = 25;
$itemPops = 50;
$itemPeppermint = 20;

$totalJelly = 100;
$totalLollipop = 100;
$totalCane = 100;
$totalPops = 100;
$totalPeppermint = 100;

$subtotal = ($totalJelly + $totalLollipop + $totalCane + $totalPops + $totalPeppermint);
$tax = ($subtotal * 0.12);
$totalCost = $subtotal + $tax;

$payment = 'Gcash';  

if ($payment === 'Cash') {
    $paymentMessage = "Clerk: Your total cost is ₱$totalCost. Please wait for your receipt. Thank you and come again!";
} elseif ($payment === 'Gcash') {
    $paymentMessage = "Clerk: Kindly use this QR code for your payment of ₱$totalCost. Thanks! Come again!";
} elseif ($payment === 'Card') {
    $paymentMessage = "Clerk: Kindly scan your card for ₱$totalCost. Have a good day!";
} else {
    $paymentMessage = "Clerk: Thank you! Have a nice day!";
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

<p>Here’s what you ordered this time hehe:</p>

<ul>
    <li>100g of <?= $orders[0] ?> = ₱<?= $itemJelly ?></li>
    <li>10pcs of <?= $orders[1] ?> = ₱<?= $itemLollipop ?></li>
    <li>1 pack of <?= $orders[2] ?> = ₱<?= $itemCane ?></li>
    <li>1 pack of assorted <?= $orders[3] ?> = ₱<?= $itemPops ?></li>
    <li>50g of <?= $orders[4] ?> = ₱<?= $itemPeppermint ?></li>
</ul>

<p>Total prices for each item (yep, we calculated haha):</p>
<ul>
    <li>1000g of <?= $orders[0] ?> = ₱<?= $totalJelly ?></li>
    <li>100pcs of <?= $orders[1] ?> = ₱<?= $totalLollipop ?></li>
    <li>4 pack of <?= $orders[2] ?> = ₱<?= $totalCane ?></li>
    <li>2 pack of assorted <?= $orders[3] ?> = ₱<?= $totalPops ?></li>
    <li>250g of <?= $orders[4] ?> = ₱<?= $totalPeppermint ?></li>
</ul>

<p>SubTotal Cost: ₱<?= $subtotal ?></p>
<p>Tax: ₱<?= $tax ?></p>
<p>--------------------------------------------------------------</p>
<p>Total Cost: ₱<?= $totalCost ?></p>
<p>--------------------------------------------------------------</p>

<p>Payment Method: <?= $payment ?></p>
<p><?= $paymentMessage ?></p>

<p>Thanks a lot for buying! Hope you enjoyed your treats :D</p>

</body>
<?php include 'footer.php'; ?>
</html>
