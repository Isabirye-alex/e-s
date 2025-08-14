<div class="app-content">

    <div class="card customized-card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">Locked Users</h3>
            </div>
        </div>
        <div class="card-body p-4">
            <div class="col-lg-12">
                <div id="toolbar" class="mb-4 pb-3">
                    <a href="#" class="btn btn-outline-info btn-flat btn-sm unlockuser me-2"><i
                            class="fa fa-unlock me-2"></i>Unlock</a>
                    <a href="#" class="btn btn-outline-danger btn-flat btn-sm lockuser me-2"><i
                            class="fa fa-lock me-2"></i>History</a>
                </div>
            </div>
            <div class="table-responsive customized-table-container">
                <div id="lockeduserstable_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dt-buttons btn-group flex-wrap"> <button
                            class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                            aria-controls="lockeduserstable" type="button"><span>Copy</span></button> <button
                            class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                            aria-controls="lockeduserstable" type="button"><span>CSV</span></button> <button
                            class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                            aria-controls="lockeduserstable" type="button"><span>Excel</span></button> <button
                            class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                            aria-controls="lockeduserstable" type="button"><span>PDF</span></button> <button
                            class="btn btn-secondary buttons-print" tabindex="0" aria-controls="lockeduserstable"
                            type="button"><span>Print</span></button> </div>
                    <div id="lockeduserstable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                class="" placeholder="" aria-controls="lockeduserstable"></label></div>
                    <div id="lockeduserstable_processing" class="dataTables_processing" role="status"
                        style="display: none;">
                        <div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <table id="lockeduserstable"
                        class="table display nowrap table-stripped customized-table dataTable no-footer"
                        style="width: 100%;" aria-describedby="lockeduserstable_info">
                        <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="lockeduserstable"
                                    rowspan="1" colspan="1" style="width: 81px;"
                                    aria-label="Username: activate to sort column descending" aria-sort="ascending">
                                    Username</th>
                                <th class="sorting" tabindex="0" aria-controls="lockeduserstable" rowspan="1"
                                    colspan="1" style="width: 231px;"
                                    aria-label="Email: activate to sort column ascending">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="lockeduserstable" rowspan="1"
                                    colspan="1" style="width: 76px;"
                                    aria-label="User Type: activate to sort column ascending">User Type</th>
                                <th class="sorting" tabindex="0" aria-controls="lockeduserstable" rowspan="1"
                                    colspan="1" style="width: 96px;"
                                    aria-label="Locked By: activate to sort column ascending">Locked By</th>
                                <th class="sorting" tabindex="0" aria-controls="lockeduserstable" rowspan="1"
                                    colspan="1" style="width: 287px;"
                                    aria-label="Reason: activate to sort column ascending">Reason</th>
                                <th class="sorting" tabindex="0" aria-controls="lockeduserstable" rowspan="1"
                                    colspan="1" style="width: 153px;"
                                    aria-label="Locked Date: activate to sort column ascending">Locked Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td class="sorting_1">shan</td>
                                <td>namutebisophia28@gmail.com</td>
                                <td>Cashier</td>
                                <td>Peter Mukisa</td>
                                <td>Playing in account during presentation</td>
                                <td>2025-07-15 14:09:38</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="dataTables_info" id="lockeduserstable_info" role="status" aria-live="polite">Showing 1
                        to 1 of 1 entries</div>
                    <div class="dataTables_paginate paging_simple_numbers" id="lockeduserstable_paginate"><a
                            class="paginate_button previous disabled" aria-controls="lockeduserstable"
                            aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1"
                            id="lockeduserstable_previous">Previous</a><span><a class="paginate_button current"
                                aria-controls="lockeduserstable" role="link" aria-current="page" data-dt-idx="0"
                                tabindex="0">1</a></span><a class="paginate_button next disabled"
                            aria-controls="lockeduserstable" aria-disabled="true" role="link" data-dt-idx="next"
                            tabindex="-1" id="lockeduserstable_next">Next</a></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let table = null;
        let selecteduser = null;
        // const helperobj = new HelperClass();
        $(async () => {
            loadDataLabel();
        });
        const loadDataLabel = () => {
            table = $("#lockeduserstable").DataTable({
                responsive: true,
                processing: true,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copy',
                        exportOptions: { columns: ':not(:last-child)' } // Exclude last column
                    },
                    {
                        extend: 'csv',
                        exportOptions: { columns: ':not(:last-child)' }
                    },
                    {
                        extend: 'excel',
                        exportOptions: { columns: ':not(:last-child)' }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: { columns: ':not(:last-child)' }
                    },
                    {
                        extend: 'print',
                        exportOptions: { columns: ':not(:last-child)' }
                    }
                ],
                ajax: {
                    url: _base_url_ + "classes/Users.php?f=viewlocked",
                    dataSrc: "",
                },
                columns: [
                    { data: "username" }, { data: "email" },
                    { data: "usertype" },
                    { data: "creatorId" }, { data: "reason" }, { data: "date_time" },
                ],
            });

            $("#lockeduserstable tbody").on("click", "tr", function () {
                if ($(this).hasClass("selected")) {
                    $(this).removeClass("selected");
                } else {
                    table.$("tr.selected").removeClass("selected");
                    $(this).addClass("selected");
                    var selectedIndex = table.row(".selected", { selected: true }).index();
                    var selectedRow = table.row(selectedIndex).data();
                    selecteduser = selectedRow.userId;
                }
            });
        }

        $(document).ready(function () {
            $('.deleteuser').click(function () {
                if (selecteduser == null) {
                    toastr.error("Please select a user to delete");
                    return;
                }
                _conf("Are you sure to delete this system user", "delete_user");
            })
            $('.lockuser').click(function () {
                if (selecteduser == null) {
                    toastr.error("Please select a user to lock");
                    return;
                }
                _conf("Are you sure to lock this system user", "lock_user");
            })

            $('.unlockuser').click(function () {
                if (selecteduser == null) {
                    toastr.error("Please select a user to unlock");
                    return;
                }
                _conf("Are you sure to unlock this system user", "unlock_user");
            })

            $('.reset').click(function () {
                if (selecteduser == null) {
                    toastr.error("Please select a user to reset");
                    return;
                }
                _conf("Are you sure to reset this system user password", "reset_user");
            })

            $('.create_new').click(function () {
                uni_modal('Add New User', _base_url_ + "models/users/newuser.php", 'large');
            })
            $('.edit').click(function () {
                if (selecteduser == null) {
                    toastr.error("Please select a user to edit");
                    return;
                }
                uni_modal('Edit System User', _base_url_ + "models/users/newuser.php?id=" + selecteduser, 'large');
            })
            $('.assignrole').click(function () {
                if (selecteduser == null) {
                    toastr.error("Please select a user to assign roles");
                    return;
                }
                uni_modal('Assign User Roles', _base_url_ + "models/users/assignroles.php?id=" + selecteduser, 'large');
            })
            $('.table').dataTable();
        })

        function delete_user() {
            $.post(_base_url_ + 'classes/Users.php?f=deleteuser', { id: selecteduser },
                function (data) {
                    var resp = JSON.parse(data);
                    if (resp.status == 'success') {
                        table.ajax.reload();
                        selecteduser = null;
                        $('#confirm_modal').modal('hide');
                        toastr.success(resp.msg);
                    } else {
                        toastr.error(resp.msg);

                    }
                }
            );
        }

        function lock_user() {
            $.post(_base_url_ + 'classes/Users.php?f=lockuser', { id: selecteduser },
                function (data) {
                    var resp = JSON.parse(data);
                    if (resp.status == 'success') {
                        table.ajax.reload();
                        selecteduser = null;
                        $('#confirm_modal').modal('hide');
                        toastr.success(resp.msg);
                    } else {
                        toastr.error(resp.msg);

                    }
                }
            );
        }

        function unlock_user() {
            $.post(_base_url_ + 'classes/Users.php?f=unlockuser', { id: selecteduser },
                function (data) {
                    var resp = JSON.parse(data);
                    if (resp.status == 'success') {
                        table.ajax.reload();
                        selecteduser = null;
                        $('#confirm_modal').modal('hide');
                        toastr.success(resp.msg);
                    } else {
                        toastr.error(resp.msg);

                    }
                }
            );
        }

        function reset_user() {
            $.post(_base_url_ + 'classes/Users.php?f=resetuser', { id: selecteduser },
                function (data) {
                    var resp = JSON.parse(data);
                    if (resp.status == 'success') {
                        table.ajax.reload();
                        selecteduser = null;
                        $('#confirm_modal').modal('hide');
                        toastr.success(resp.msg);
                    } else {
                        toastr.error(resp.msg);

                    }
                }
            );
        }

    </script>
</div>