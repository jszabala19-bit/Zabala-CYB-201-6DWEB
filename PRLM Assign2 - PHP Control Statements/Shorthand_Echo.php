<?php
// NAME: Zabala, Jan Chrysler S.
// SECTION: CYB-201
// SUBJECT: 6DWEB
// DATE: November 29, 2025

$name = "JC";
$orders = ['Jelly Beans', 'Lollipops', 'Candy Canes', 'Push Pops', 'Peppermints'];

$customer_choice = 'Lollipops';

switch ($customer_choice) {
    case 'Jelly Beans':
        $response = "Yay! Jelly Beans! Good choice!";
        break;
    case 'Lollipops':
        $response = "Lollipops are super popular among our kids customers!";
        break;
    case 'Candy Canes':
        $response = "Candy Canes are for those who love classic sweetness!";
        break;
    case 'Push Pops':
        $response = "Push Pops are everyone's favorite! Nice pick!";
        break;
    case 'Peppermints':
        $response = "Peppermints for the wise ones! hehe";
        break;
    default:
        $response = "Hmm, that treat isn't on our list... maybe you can pick something else?";
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

<p>Here’s our menu again, hope you’re still hungry :D</p>

<ul>
    <?php foreach($orders as $index => $item): ?>
        <li>
            <?php
                if($index == 0) echo "100g of ";
                elseif($index == 1) echo "10pcs of ";
                elseif($index == 2) echo "1 pack of ";
                elseif($index == 3) echo "1 pack of assorted ";
                elseif($index == 4) echo "50g of ";
            ?>
            <?= $item ?>
        </li>
    <?php endforeach; ?>
</ul>

<p>Customer: Here are my orders! Thanks hehe</p>
<p>Clerk: Thank you! So what is your favorite among them?</p>
<p>Customer: <?= $customer_choice ?>!</p>
<p>Clerk: <?= $response ?></p>

<p>Let’s wait a sec while we calculate your total price… hehe</p>
<p>Thanks a bunch for choosing us!!</p>

</body>
<?php include 'footer.php'; ?>
</html>
