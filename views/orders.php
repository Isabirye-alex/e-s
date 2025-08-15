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
            <button type="button" class="btn btn-primary me-2 open-modal-btn" data-requires-selection="true" data-page="/e-s/views/mini_pages/order_details.php">
                Update Order
            </button>
            <button type="button" class="btn btn-primary open-modal-btn" data-page="/e-s/views/order_detail.php"
                data-requires-selection="true" data-size="lg">View Order</button>
            <a href="#" class="btn py-2 btn-dark">Print Receipt</a>
        </div>


        <div class="col-md-6 d-flex justify-content-end">
            <button onclick="copyTable()" class="btn btn-secondary me-2">Copy</button>
            <a href="/e-s/controllers/export_csv.php" class="btn btn-success me-2">CSV</a>

            <a href="/e-s/controllers/export_excel.php" class="btn btn-warning me-2">Excel</a>

            <a href="/e-s/controllers/export_pdf.php" class="btn btn-primary me-2">PDF</a>
            <button onclick="printTable()" class="btn btn-info">Print</button>
        </div>
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
                <tr class="clickable-row" data-order-id="<?= $od->id ?>"
                    data-customer-name="<?= htmlspecialchars($od->customer_first_name . ' ' . $od->customer_last_name) ?>"
                    data-total-amount="<?= $od->total_amount ?>" data-payment-method="<?= $od->payment_method ?>"
                    data-payment-date="<?= $od->is_paid_at ?>" data-status="<?= $od->status ?>"
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
            <tr>
                <td colspan="7" class="text-center">No orders found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>

<!-- Orders Open modal script Beginning -->


<!-- Orders Open modal script Beginning -->

<!--Javascript functions for the right buttons-->
<script>
    function copyTable() {
        let table = document.getElementById("orderTable");
        let rows = table.querySelectorAll("tr");
        let textToCopy = "";

        rows.forEach((row, rowIndex) => {
            let cells = row.querySelectorAll("th, td");
            let rowText = [];
            cells.forEach(cell => {
                rowText.push(cell.innerText.trim());
            });
            textToCopy += rowText.join("\t") + "\n"; // tab-separated values
        });

        navigator.clipboard.writeText(textToCopy)
            .then(() => alert("Table data copied to clipboard!"))
            .catch(err => alert("Copy failed: " + err));
    }
</script>

<script>
    function printTable() {
        // Check if DataTables is initialized
        let table = $('#orderTable').DataTable();

        // Get all data, not just visible rows
        let allData = table.rows().data();

        // Build HTML table manually
        let html = '<table border="1" style="width:100%; border-collapse: collapse;">';
        html += '<tr>';
        $('#orderTable thead th').each(function () {
            html += '<th>' + $(this).text() + '</th>';
        });
        html += '</tr>';

        allData.each(function (row) {
            html += '<tr>';
            row.forEach(function (cell) {
                html += '<td>' + cell + '</td>';
            });
            html += '</tr>';
        });

        html += '</table>';

        // Open print window
        let printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Print Orders</title></head><body>');
        printWindow.document.write('<h2>Order List</h2>');
        printWindow.document.write(html);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }

</script>