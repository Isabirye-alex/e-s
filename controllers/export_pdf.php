<?php
// export_pdf.php
require_once __DIR__ . '/../vendor/autoload.php';
use Dompdf\Dompdf;

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/orders.php';
$orders = Orders::getAllOrders($pdo);

$html = '<h3>Order List</h3><table border="1" width="100%"><tr><th>Order Id</th><th>Customer Name</th><th>Total</th></tr>';
foreach ($orders as $od) {
    $html .= "<tr>
        <td>{$od->id}</td>
        <td>{$od->customer_first_name} {$od->customer_last_name}</td>
        <td>{$od->total_amount}</td>
    </tr>";
}
$html .= '</table>';

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("orders.pdf");
