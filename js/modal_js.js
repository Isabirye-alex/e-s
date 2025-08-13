
    $(document).ready(function () {
        $('.open-modal-btn').on('click', function () {
            const pageUrl = $(this).data('page');
            const size = $(this).data('size') || ''; // 'sm', 'lg', 'xl', or ''

            const modalDialog = $('#dynamicModal .modal-dialog');

            modalDialog.removeClass('modal-sm modal-md modal-lg modal-xl');

            if (size) {
                modalDialog.addClass(`modal-${size}`);
            }

            const modal = new bootstrap.Modal(document.getElementById('dynamicModal'));


            modal.show();

            $('#modalContent').load(pageUrl, function (response, status, xhr) {
                if (status === "error") {
                    $('#modalContent').html(`<p class="text-danger">Error loading page: ${xhr.status} ${xhr.statusText}</p>`);
                    $('#dynamicModalLabel').text('Error');
                } else {
                    $('#dynamicModalLabel').text('Details');
                }
            });
        });
  });

