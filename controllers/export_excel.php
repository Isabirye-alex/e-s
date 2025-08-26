<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/orders.php';

if (!isset($pdo)) {
    die("No database connection");
}

$orders = Orders::getAllOrders($pdo);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="orders.xls"');

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Customer</th><th>Total</th></tr>";

foreach ($orders as $od) {
    echo "<tr>
        <td>{$od->id}</td>
        <td>{$od->customer_first_name} {$od->customer_last_name}</td>
        <td>{$od->total_amount}</td>
    </tr>";
}

echo "</table>";
