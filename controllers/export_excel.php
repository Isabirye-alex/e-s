<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/orders.php';

$orders = Orders::getAllOrders($pdo);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="orders.xls"');

echo "<table border='1'>";
echo "<tr><th>Order Id</th><th>Customer Name</th><th>Total Amount</th><th>Payment Method</th><th>Payment Date</th><th>Status</th><th>Delivery Date</th></tr>";

foreach ($orders as $od) {
    echo "<tr>
        <td>{$od->id}</td>
        <td>{$od->customer_first_name} {$od->customer_last_name}</td>
        <td>{$od->total_amount}</td>
        <td>{$od->payment_method}</td>
        <td>".($od->is_paid_at ?: 'Not yet paid')."</td>
        <td>{$od->status}</td>
        <td>".($od->is_delivered_at ?: 'Delivery Pending')."</td>
    </tr>";
}

echo "</table>";
exit;
