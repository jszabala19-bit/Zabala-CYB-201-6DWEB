<?php
declare(strict_types=1);

// NAME: Zabala, Jan Chrysler S.
// SECTION: CYB-201
// SUBJECT: 6DWEB
// DATE: December 3, 2025

$candy = [
'Jelly Beans'   => ['price'=>10, 'stock'=>10],
'Lollipops'     => ['price'=>10, 'stock'=>10],
'Candy Canes'   => ['price'=>25, 'stock'=>25],
'Push Pops'     => ['price'=>50, 'stock'=>50],
'Peppermints'   => ['price'=>20, 'stock'=>20],
'Gumdrops'      => ['price'=>15, 'stock'=>15],
'Chocolate Bar' => ['price'=>30, 'stock'=>5],
'Caramel Chews' => ['price'=>18, 'stock'=>12]
];

$tax = 12;

function get_reorder_message(int $stock): string {
    if($stock < 10){
        return "Yes";
    } else {
        return "No";
    }
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax=0): float {
    $total = $price * $quantity;
    return $total * ($tax/100);
}

include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Maskulado's Sweet Treats - Stock Monitoring</title>
<link rel="stylesheet" href="BasicPHP1/css/styles.css?v=1">
</head>
<body>

<h2>Maskulado's Sweet Treats - Stock Monitoring</h2>
<p>Check the inventory of all available products below.</p>

<table>
<tr>
<th>Product</th>
<th>Stock</th>
<th>Re-order?</th>
<th>Total Value (₱)</th>
<th>Tax Due (₱)</th>
</tr>

<?php
foreach($candy as $product_name => $data){
    echo "<tr>";
    echo "<td>".$product_name."</td>";
    echo "<td>".$data['stock']."</td>";
    echo "<td>".get_reorder_message($data['stock'])."</td>";
    echo "<td>₱".number_format(get_total_value($data['price'], $data['stock']),2)."</td>";
    echo "<td>₱".number_format(get_tax_due($data['price'], $data['stock'], $tax),2)."</td>";
    echo "</tr>";
}
?>

</table>

<?php include 'footer.php'; ?>

</body>
</html>
