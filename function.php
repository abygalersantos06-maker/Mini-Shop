<?php
declare(strict_types=1); // Step 1
include "includes/header.php";

// Step 2: Multidimensional array (6 products)
$healthyShop = [
    "Apples" => ["price" => 20.00, "stock" => 12],
    "Bananas" => ["price" => 15.00, "stock" => 26],
    "Carrots" => ["price" => 10.00, "stock" => 8],
    "Spinach" => ["price" => 18.00, "stock" => 14],
    "Almonds" => ["price" => 55.00, "stock" => 6],
    "Oats" => ["price" => 48.00, "stock" => 22]
];

// Step 3: Global tax rate
$tax_rate = 20;

// Step 4–5: Reorder function with ternary
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

// Step 6–7: Total value function
function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

// Step 8–9: Tax due function
function get_tax_due(float $price, int $qty, int $tax_rate = 0): float {
    return ($price * $qty) * ($tax_rate / 100);
}

?>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total Value</th>
        <th>Tax Due</th>
    </tr>

    <?php
    // Step 10: Foreach over array
    foreach ($healthyShop as $product_name => $data) {
        $price = $data["price"];
        $stock = $data["stock"];
    ?>
    <tr>
        <!-- Step 11: Product name -->
        <td><?= $product_name ?></td>

        <!-- Step 12: Stock -->
        <td><?= $stock ?></td>

        <!-- Step 13: Reorder message -->
        <td><?= get_reorder_message($stock) ?></td>

        <!-- Step 14: Total value -->
        <td>₱<?= number_format(get_total_value($price, $stock), 2) ?></td>

        <!-- Step 15: Tax due -->
        <td>₱<?= number_format(get_tax_due($price, $stock, $tax_rate), 2) ?></td>
    </tr>
    <?php } ?>
    <!-- Step 16: Loop ends -->
</table>
<?php include "includes/footer.php"; ?>