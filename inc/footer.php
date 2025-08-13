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
            ordering: false,
            pageLength: 10,
            lengthChange: false,
            language: { search: "Search:", paginate: { previous: "&laquo;", next: "&raquo;" } }
        });

        let selectedRow = null;

        $('#orderTable tbody').on('click', 'tr', function () {
            if (selectedRow) $(selectedRow).removeClass('selected-row');
            if (selectedRow === this) selectedRow = null;
            else { selectedRow = this; $(this).addClass('selected-row'); }
        });

        $('.open-modal-btn').on('click', function () {
            if (!selectedRow) { alert('Select a row first!'); return; }

            const orderId = $(selectedRow).data('order-id');
            const url = `/x/views/mini_pages/order_details.php?orderId=${orderId}`;

            const modalEl = document.getElementById('dynamicModal');
            const modal = new bootstrap.Modal(modalEl);

            $('#dynamicModalLabel').text('Update Order ' + orderId);
            
            modal.show();

            // AJAX load content
            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) { $('#modalContent').html(data); },
                error: function(xhr, status, error) {
                    $('#modalContent').html(`<p class="text-danger">Error: ${xhr.status} ${error}</p>`);
                    $('#dynamicModalLabel').text('Error');
                }
            });

            $(modalEl).off('hidden.bs.modal').on('hidden.bs.modal', function () {
                if (selectedRow) $(selectedRow).removeClass('selected-row');
                selectedRow = null;
                $('#modalContent').html('');
                $('#dynamicModalLabel').text('');
            });
        });

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

<!-- Table Styling -->
<style>
#orderTable {
    margin: 2rem 0;
    padding: 1rem;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border-radius: 0.5rem;
    background-color: #fff;
}

#orderTable th, #orderTable td { padding: 0.75rem 1rem; }

#orderTable tbody tr.selected-row td {
    background-color: #0861c0 !important;
    color: white !important;
}
</style>

