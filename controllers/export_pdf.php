<?php
// export_pdf.php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/orders.php';

use Dompdf\Dompdf;

// Ensure DB connection exists
if (!isset($pdo)) {
    die("Database connection not available.");
}

// Fetch orders
$orders = Orders::getAllOrders($pdo);

// Build HTML
$html = '
    <h3 style="text-align:center;">Order List</h3>
    <table border="1" width="100%" cellspacing="0" cellpadding="5">
        <thead>
            <tr style="background:#f2f2f2;">
                <th>Order Id</th>
                <th>Customer Name</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>';

foreach ($orders as $od) {
    $html .= "
        <tr>
            <td>{$od->id}</td>
            <td>{$od->customer_first_name} {$od->customer_last_name}</td>
            <td>{$od->total_amount}</td>
        </tr>";
}

$html .= '
        </tbody>
    </table>';

// Generate PDF
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("orders.pdf", ["Attachment" => true]); // true = force download
