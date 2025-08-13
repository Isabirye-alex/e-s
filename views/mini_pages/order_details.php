<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../models/orders.php';

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
?>
<div class="container mt-3">
    <div class="card border-0 shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Order Details</h4>
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Order ID</label>
                    <div class="text-muted"><?= htmlspecialchars($order->id) ?></div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Customer Name</label>
                    <div class="text-muted">
                        <?= htmlspecialchars($order->customer_first_name . ' ' . $order->customer_last_name) ?></div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Total Amount</label>
                    <div class="text-muted">UGX <?= number_format($order->total_amount, 2) ?></div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Payment Method</label>
                    <div class="text-muted"><?= htmlspecialchars($order->payment_method) ?></div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Payment Date</label>
                    <div class="text-muted"><?= htmlspecialchars($order->is_paid_at ?? 'Not paid yet') ?></div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Date of Delivery</label>
                    <div class="text-muted"><?= htmlspecialchars($order->is_delivered_at ?? 'Pending') ?></div>
                </div>
                <div class="col-md-12">
                    <label class="form-label fw-bold">Shipping Address</label>
                    <div class="text-muted"><?= htmlspecialchars($order->shipping_address) ?></div>
                </div>

                <div class="col-md-12 mt-3">
                    <label class="form-label fw-bold">Update Order Status</label>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
                            Update Status
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item update-order" href="#" data-action="confirm"
                                    data-id="<?= $order->id ?>">Confirm Order</a></li>
                            <li><a class="dropdown-item update-order" href="#" data-action="cancel"
                                    data-id="<?= $order->id ?>">Cancel Order</a></li>
                            <li><a class="dropdown-item update-order" href="#" data-action="pending"
                                    data-id="<?= $order->id ?>">Set to Pending</a></li>
                            <li><a class="dropdown-item update-order" href="#" data-action="shipped"
                                    data-id="<?= $order->id ?>">Mark as Shipped</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-12">
                    <label class="form-label fw-bold">Status</label>
                    <span class="badge bg-info text-dark status-badge"><?= htmlspecialchars($order->status) ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>$(document).ready(function () {
        // Update order via dropdown
        $(document).on('click', '.update-order', function (e) {
            e.preventDefault();

            const action = $(this).data('action');
            const orderId = $(this).data('id');
            const url = `/x/views/mini_pages/update_order.php?action=${action}&id=${orderId}`;

            $.getJSON(url, function (res) {
                if (res.success) {
                    alert('Order status updated to ' + res.newStatus);
                    $('.status-badge').text(res.newStatus);
                } else {
                    alert('Error: ' + res.message);
                }
            });
        });
    });
</script>