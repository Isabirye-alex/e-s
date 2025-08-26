<?php
// export_csv.php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/orders.php';
require_once __DIR__ . '/../config/db.php';
$orders = Orders::getAllOrders($pdo);

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename="orders.csv"');

$output = fopen('php://output', 'w');
fputcsv($output, ['Order Id', 'Customer Name', 'Total Amount', 'Payment Method', 'Payment Date', 'Status', 'Delivery Date']);

foreach ($orders as $od) {
    fputcsv($output,
        $od->id,
        $od->customer_first_name . ' ' . $od->customer_last_name,
        $od->total_amount,
        $od->payment_method,
        $od->is_paid_at ?: 'Not yet paid',
        $od->status,
        $od->is_delivered_at ?: 'Delivery Pending');
}
fclose($output);
exit;
