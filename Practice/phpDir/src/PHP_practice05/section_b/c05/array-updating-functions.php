<?php
$items = ["notebook", "pencil", "eraser"];
?>

<?php include 'includes/header.php'; ?>

<h1>Order</h1>

<!-- Echo the original array -->
<p>1. Original array: <?= implode(", ", $items) ?></p>

<!-- Add an element to the start -->
<?php array_unshift($items, "ruler") ?>
<p>2. Add new element: <?= implode(", ", $items) ?></p>

<!-- Remove the last element -->
<?php array_pop($items) ?>
<p>3. Remove last element: <?= implode(", ", $items) ?></p>

<?php include 'includes/footer.php'; ?>