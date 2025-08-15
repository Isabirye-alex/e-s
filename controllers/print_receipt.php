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

// Fetch items
$orderItems = Orders::getOrderItems($pdo, $orderId);
?>

<div id="receiptContent" style="display:none;">
    <div style="text-align:center; font-family: Arial, sans-serif; margin-bottom:20px;">
        <h2>My Company Ltd</h2>
        <p>123 Main Street, City, Country</p>
        <p>Email: info@mycompany.com | Phone: +123 456 7890</p>
        <h3>Order Receipt</h3>
    </div>

    <p><strong>Order ID:</strong> <?= $order->id ?> | <strong>Date:</strong> <?= $order->is_paid_at ?></p>
    <p><strong>Customer:</strong> <?= htmlspecialchars($order->customer_first_name . ' ' . $order->customer_last_name) ?></p>
    <p><strong>Payment Method:</strong> <?= htmlspecialchars($order->payment_method) ?> | <strong>Status:</strong> <?= htmlspecialchars($order->status) ?></p>

    <table style="width:100%; border-collapse: collapse; font-family: Arial, sans-serif;">
        <thead>
            <tr>
                <th style="border:1px solid #333; padding:5px;">Item Name</th>
                <th style="border:1px solid #333; padding:5px;">Qty</th>
                <th style="border:1px solid #333; padding:5px;">Price</th>
                <th style="border:1px solid #333; padding:5px;">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $grandTotal = 0;
            foreach ($orderItems as $item): 
                $subtotal = $item['quantity'] * $item['product_price'];
                $grandTotal += $subtotal;
            ?>
                <tr>
                    <td style="border:1px solid #333; padding:5px;"><?= htmlspecialchars($item['product_name']) ?></td>
                    <td style="border:1px solid #333; padding:5px;"><?= $item['quantity'] ?></td>
                    <td style="border:1px solid #333; padding:5px;"><?= number_format($item['product_price'],2) ?></td>
                    <td style="border:1px solid #333; padding:5px;"><?= number_format($subtotal,2) ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3" style="text-align:right; font-weight:bold; border:1px solid #333; padding:5px;">Grand Total</td>
                <td style="border:1px solid #333; padding:5px; font-weight:bold;"><?= number_format($grandTotal,2) ?></td>
            </tr>
        </tbody>
    </table>

    <div style="text-align:center; margin-top:20px;">
        Thank you for your purchase!
    </div>
</div>

<script>
function printReceipt() {
    var content = document.getElementById('receiptContent').innerHTML;
    var myWindow = window.open('', '', 'width=600,height=800');
    myWindow.document.write('<html><head><title>Order Receipt</title></head><body>');
    myWindow.document.write(content);
    myWindow.document.write('</body></html>');
    myWindow.document.close();
    myWindow.focus();
    myWindow.print();
    myWindow.close();
}
</script>
