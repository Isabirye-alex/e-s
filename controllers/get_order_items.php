<?php
// get_order_items.php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/orders.php';

// Validate orderId
if (!isset($_GET['orderId']) || !is_numeric($_GET['orderId'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid or missing order ID.'
    ]);
    exit;
}

$orderId = (int) $_GET['orderId'];

// Fetch order
$order = Orders::getOrderById($pdo, $orderId);
if (!$order) {
    echo json_encode([
        'success' => false,
        'message' => 'Order not found.'
    ]);
    exit;
}

// Fetch order items
$orderItems = Orders::getOrderItems($pdo, $orderId);
if (!$orderItems) $orderItems = [];

// Prepare JSON response
$response = [
    'success' => true,
    'order' => [
        'id' => $order->id,
        'customer_first_name' => $order->customer_first_name,
        'customer_last_name' => $order->customer_last_name,
        'is_paid_at' => $order->is_paid_at,
        'payment_method' => $order->payment_method,
        'status' => $order->status,
        'is_delivered_at' => $order->is_delivered_at
    ],
    'items' => []
];

foreach ($orderItems as $item) {
    $response['items'][] = [
        'product_name' => $item['product_name'],
        'quantity' => $item['quantity'],
        'product_price' => $item['product_price']
    ];
}

// Return JSON
header('Content-Type: application/json');
echo json_encode($response);
