<?php
include 'includes/header.php';

// Shop 
$storeName = "Mini Healthy Goods Shop";
$ownerName = "Abygale Santos";

// Vegetables
$vegetables = [
    "Singkamas", "Talong", "Sigarilyas", "Mani",
    "Sitaw", "Bataw", "Patani", "Kundol",
    "Patola", "Upo", "Kalabasa", "Labanos",
    "Mustasa", "Sibuyas", "Kamatis", "Bawang",
    "Luya", "Linga"
];

$prices = [
    25, 30, 15, 10, 20, 18, 22, 40, 35,
    28, 50, 15, 12, 14, 18, 10, 5, 3
];

// Type Juggling
$stockCount = "10";
$stockCount += 5;
$adjustedPrice = (string) ($prices[0] + 5);

// Totals
$subtotal = 0;
for ($i = 0; $i < count($prices); $i++) {
    $subtotal += $prices[$i];
}

if ($subtotal > 400) {
    $discount = 50;
} elseif ($subtotal > 300) {
    $discount = 30;
} else {
    $discount = 10;
}

$taxRate = 0.10;
$tax = ($subtotal - $discount) * $taxRate;
$total = ($subtotal - $discount) + $tax;

// Long veggie names
$longNames = [];
for ($i = 0; $i < count($vegetables); $i++) {
    if (strlen($vegetables[$i]) > 6) {
        $longNames[] = $vegetables[$i];
    }
}

// Bahay Kubo Lyrics
$lyrics = [
    "Bahay kubo, kahit munti",
    "Ang halaman doon ay sari-sari.",
    "Singkamas at talong, sigarilyas at mani",
    "Sitaw, bataw, patani.",
    "Kundol, patola, upo’t kalabasa",
    "At saka mayroon pang labanos, mustasa,",
    "Sibuyas, kamatis, bawang at luya",
    "Sa paligid-ligid ay maraming linga.",
    "Bahay kubo, kahit munti",
    "Ang halaman doon ay sari-sari.",
    "Singkamas at talong, sigarilyas at mani",
    "Sitaw, bataw, patani.",
    "Kundol, patola, upo’t kalabasa",
    "At saka mayroon pang labanos, mustasa,",
    "Sibuyas, kamatis, bawang at luya",
    "Sa paligid-ligid ay maraming linga."
];
?>

<h2>Vegetable Inventory</h2>
<ul>
    <?php
    for ($i = 0; $i < count($vegetables); $i++) {
        echo "<li>" . $vegetables[$i] . " — ₱" . $prices[$i] . "</li>";
    }
    ?>
</ul>

<h2>Shopping Summary</h2>
<p>Subtotal: ₱<?= $subtotal ?></p>
<p>Discount: ₱<?= $discount ?></p>
<p>Tax (<?= $taxRate * 100 ?>%): ₱<?= number_format($tax, 2) ?></p>
<p><strong>Total: ₱<?= number_format($total, 2) ?></strong></p>

<h2>Type Juggling Demo</h2>
<p>Initial stock (string): "10"</p>
<p>After adding 5: <?= $stockCount ?></p>
<p>Adjusted price of <?= $vegetables[0] ?>: ₱<?= $adjustedPrice ?></p>

<h2>Long Vegetable Names (7+ letters)</h2>
<ul>
    <?php
    for ($i = 0; $i < count($longNames); $i++) {
        echo "<li>" . $longNames[$i] . "</li>";
    }
    ?>
</ul>

<h2>Bahay Kubo Lyrics</h2>
<div class="lyrics">
  <?php
  for ($i = 0; $i < count($lyrics); $i++) {
    echo "<p>" . $lyrics[$i] . "</p>";
  }
  ?>
</div>


<?php include 'includes/footer.php'; ?>
</body>
</html>
