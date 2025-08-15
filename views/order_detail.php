<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/orders.php';

// Validate orderId from GET
if (!isset($_GET['orderId']) || !is_numeric($_GET['orderId'])) {
    echo "Invalid or missing order ID.";
    exit;
}

$orderId = (int) $_GET['orderId'];

// Fetch the order
$order = Orders::getOrderById($pdo, $orderId);
if (!$order) {
    echo "Order not found.";
    exit;
}

// Fetch order items
$orderItems = Orders::getOrderItems($pdo, $orderId);

?>


<div class="col-md-12 mt-4">
    <h5>Items in this Order</h5>
    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th>Image</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price (UGX)</th>
                <th>Subtotal (UGX)</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($orderItems)): ?>
                <?php foreach ($orderItems as $item): ?>
                    <tr>
                        <td><img src="<?= htmlspecialchars($item['product_image']) ?>" style="width:60px"></td>
                        <td><?= htmlspecialchars($item['product_name']) ?></td>
                        <td><?= htmlspecialchars($item['quantity']) ?></td>
                        <td><?= number_format($item['product_price'], 2) ?></td>
                        <td><?= number_format($item['quantity'] * $item['product_price'], 2) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No items found for this order.</td>
                </tr>
            <?php endif; ?>

        </tbody>
    </table>
</div>