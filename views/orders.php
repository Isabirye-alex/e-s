<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/orders.php';
require_once __DIR__ . '/../modal/modal.php';
$order = Orders::getAllOrders($pdo);
?>
    <div class="rounded px-4 py-4 shadow-lg bg-white">
    <!-- <div class="container mt-4 px-4 py-4 rounded shadow-lg"> -->
        <div class="mt-4 mb-4">
            <h2>Order Management</h2>
        </div>
        <div class="row mb-3 align-items-center" style="width:100%">
            <div class="col-md-6 d-flex">
                <button type="button" class="btn btn-primary me-2 open-modal-btn" data-requires-selection="true">
                    Update Order
                </button>
                <a href="#" class="btn btn-success me-2">View Order</a>
                <a href="#" class="btn btn-dark">Print Receipt</a>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <button onclick="copyTable()" class="btn btn-secondary me-2">Copy</button>
                <a href="/e-s/controllers/export_csv.php" class="btn btn-success me-2">CSV</a>

                <button onclick="/e-s/controllers/export_excel.php" class="btn btn-warning me-2">Excel</button>
                <button onclick="/e-s/controllers/export_pdf.php" class="btn btn-danger me-2">PDF</button>
                <button onclick="printTable()" class="btn btn-info">Print</button>
            </div>
        </div>
        <!-- </div> -->
        <table id="orderTable" class="table table-striped rounded shadow-lg table-bordered mt-4">
    <thead>
        <tr>
            <th>Order Id</th>
            <th>Customer Name</th>
            <th>Total Amount</th>
            <th>Payment Method</th>
            <th>Payment Date</th>
            <th>Status</th>
            <th>Date of Delivery</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($order)): ?>
            <?php foreach ($order as $od): ?>
                <tr class="clickable-row" 
                    data-order-id="<?= $od->id ?>"
                    data-customer-name="<?= htmlspecialchars($od->customer_first_name . ' ' . $od->customer_last_name) ?>"
                    data-total-amount="<?= $od->total_amount ?>"
                    data-payment-method="<?= $od->payment_method ?>"
                    data-payment-date="<?= $od->is_paid_at ?>"
                    data-status="<?= $od->status ?>"
                    data-delivery-date="<?= $od->is_delivered_at ?>">
                    <td><?= htmlspecialchars($od->id) ?></td>
                    <td><?= htmlspecialchars($od->customer_first_name . ' ' . $od->customer_last_name) ?></td>
                    <td><?= htmlspecialchars(number_format($od->total_amount, 2)) ?></td>
                    <td><?= htmlspecialchars($od->payment_method) ?></td>
                    <td><?= $od->is_paid_at ?: 'Not yet paid' ?></td>
                    <td><?= htmlspecialchars($od->status) ?></td>
                    <td><?= $od->is_delivered_at ?: 'Delivery Pending' ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="7" class="text-center">No orders found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>   
 </div>

 <!--Javascript functions for the right buttons-->
 <script>
     function copyTable() {
    let table = document.getElementById("orderTable").outerHTML;
    navigator.clipboard.writeText(table);
    alert("Table copied to clipboard!");
}
 </script>

 <script>
    function printTable() {
    let content = document.getElementById("orderTable").outerHTML;
    let newWin = window.open("");
    newWin.document.write("<html><body>" + content + "</body></html>");
    newWin.print();
    newWin.close();
}

 </script>



    




