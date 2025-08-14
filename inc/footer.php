<!-- OverlayScrollbars Init -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sidebar = document.querySelector('.sidebar-wrapper');
        if (sidebar && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebar, {
                scrollbars: { theme: 'os-theme-light', autoHide: 'leave', clickScroll: true },
            });
        }
    });
</script>

<!-- Initialize DataTables & Row Selection -->
<script>
    $(document).ready(function () {
        if ($('#orderTable').length) {
            const table = $('#orderTable').DataTable({
                ordering: true,
                pageLength: 10,
                lengthChange: true,
                language: { search: "Search:", paginate: { previous: "&laquo;", next: "&raquo;" } }
            });

            let selectedRow = null;

            $('#orderTable tbody').on('click', 'tr', function () {
                if (selectedRow) $(selectedRow).removeClass('selected-row');
                if (selectedRow === this) selectedRow = null;
                else { selectedRow = this; $(this).addClass('selected-row'); }
            });

            $('.open-modal-btn').on('click', function () {
                const pageUrl = $(this).data('page'); // page to load in modal
                const size = $(this).data('size') || 'lg';
                const modalEl = document.getElementById('dynamicModal');
                const modal = new bootstrap.Modal(modalEl);

                // If this button requires a selected row
                if ($(this).data('requires-selection')) {
                    if (!selectedRow) { alert('Select a row first!'); return; }
                    const orderId = $(selectedRow).data('order-id');
                    $('#dynamicModalLabel').text('Update Order ' + orderId);
                    loadModalContent(`${pageUrl}?orderId=${orderId}`);
                } else {
                    $('#dynamicModalLabel').text($(this).text());
                    loadModalContent(pageUrl);
                }

                modal.show();
            });

            function loadModalContent(url) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (data) { $('#modalContent').html(data); },
                    error: function (xhr, status, error) {
                        $('#modalContent').html(`<p class="text-danger">Error: ${xhr.status} ${error}</p>`);
                        $('#dynamicModalLabel').text('Error');
                    }
                });
            }

            // Maintain selection after redraw
            table.on('draw', function () {
                if (selectedRow) {
                    const id = $(selectedRow).data('order-id');
                    const row = $('#orderTable tbody tr').filter(function () { return $(this).data('order-id') == id; });
                    if (row.length) { row.addClass('selected-row'); selectedRow = row[0]; }
                    else selectedRow = null;
                }
            });
        }
    });
</script>

<script>
    $(document).ready(function () {
        if ($('#productTable').length) {
            const table = $('#productTable').DataTable({
                ordering: true,
                pageLength: 10,
                lengthChange: true,
                language: { search: "Search:", paginate: { previous: "&laquo;", next: "&raquo;" } }
            });

            let selectedRow = null;

            $('#productTable tbody').on('click', 'tr', function () {
                if (selectedRow) $(selectedRow).removeClass('selected-row');
                if (selectedRow === this) selectedRow = null;
                else { selectedRow = this; $(this).addClass('selected-row'); }
            });

            $('.open-modal-btn').on('click', function () {
                const pageUrl = $(this).data('page'); // page to load in modal
                const size = $(this).data('size') || 'lg';
                const modalEl = document.getElementById('dynamicModal');
                const modal = new bootstrap.Modal(modalEl);

                // If this button requires a selected row
                if ($(this).data('requires-selection')) {
                    if (!selectedRow) { alert('Select a row first!'); return; }
                    const orderId = $(selectedRow).data('order-id');
                    $('#dynamicModalLabel').text('Update Order ' + orderId);
                    loadModalContent(`${pageUrl}?orderId=${orderId}`);
                } else {
                    $('#dynamicModalLabel').text($(this).text());
                    loadModalContent(pageUrl);
                }

                modal.show();
            });

            function loadModalContent(url) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (data) { $('#modalContent').html(data); },
                    error: function (xhr, status, error) {
                        $('#modalContent').html(`<p class="text-danger">Error: ${xhr.status} ${error}</p>`);
                        $('#dynamicModalLabel').text('Error');
                    }
                });
            }

            // Maintain selection after redraw
            table.on('draw', function () {
                if (selectedRow) {
                    const id = $(selectedRow).data('order-id');
                    const row = $('#productTable tbody tr').filter(function () { return $(this).data('order-id') == id; });
                    if (row.length) { row.addClass('selected-row'); selectedRow = row[0]; }
                    else selectedRow = null;
                }
            });
        }
    });
</script>

<!-- Table Styling -->
<style>
    #orderTable {
        margin: 2rem 0;
        padding: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        background-color: #fff;
    }

    #orderTable th,
    #orderTable td {
        padding: 0.75rem 1rem;
    }

    #orderTable tbody tr.selected-row td {
        background-color: #0861c0 !important;
        color: white !important;
    }

    #productTable {
        margin: 2rem 0;
        padding: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        background-color: #fff;
    }

    #productTable th,
    #productTable td {
        padding: 0.75rem 1rem;
    }

    #productTable tbody tr.selected-row td {
        background-color: #0861c0 !important;
        color: white !important;
    }
</style>