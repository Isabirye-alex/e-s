<div class="container mt-4">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="modules-tab" data-bs-toggle="tab" data-bs-target="#modules" type="button" role="tab" aria-selected="true">Modules</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="roles-tab" data-bs-toggle="tab" data-bs-target="#roles" type="button" role="tab" aria-selected="false" tabindex="-1">System Roles</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab" aria-selected="false" tabindex="-1">Functional Specs</button>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content pt-3" id="myTabContent">
    
    <!-- Modules Pane -->
    <div class="tab-pane fade show active" id="modules" role="tabpanel" aria-labelledby="modules-tab">
      <div class="card customized-card">
        <div class="card-body p-4">
          <div class="col-lg-12">
            <div id="toolbar" class="mb-4 pb-3">
              <a href="#" class="btn btn-primary btn-flat btn-sm create_new me-2"><i class="fa fa-plus-circle me-2"></i>Add</a>
              <a href="#" class="btn btn-outline-success btn-flat btn-sm edit me-2"><i class="fa fa-edit me-2"></i>Edit</a>
              <a href="#" class="btn btn-outline-danger btn-flat btn-sm deletemodule me-2"><i class="fa fa-trash me-2"></i>Delete Module</a>
              <a href="#" class="btn btn-outline-dark btn-flat btn-sm assignroles me-2"><i class="fa fa-check me-2"></i>Assign Roles</a>
            </div>
          </div>
          <div class="table-responsive customized-table-container">
            <div id="modulestable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="modulestable_length"><label>Show <select name="modulestable_length" aria-controls="modulestable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="modulestable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="modulestable"></label></div><div id="modulestable_processing" class="dataTables_processing" role="status" style="display: none;"><div><div></div><div></div><div></div><div></div></div></div><table id="modulestable" class="table display nowrap table-stripped customized-table dataTable no-footer" aria-describedby="modulestable_info" style="width: 997px;">
              <thead>
                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="modulestable" rowspan="1" colspan="1" style="width: 54px;" aria-label="No.: activate to sort column descending" aria-sort="ascending">No.</th><th class="sorting" tabindex="0" aria-controls="modulestable" rowspan="1" colspan="1" style="width: 149px;" aria-label="Module: activate to sort column ascending">Module</th><th class="sorting" tabindex="0" aria-controls="modulestable" rowspan="1" colspan="1" style="width: 214px;" aria-label="Icon: activate to sort column ascending">Icon</th><th class="sorting" tabindex="0" aria-controls="modulestable" rowspan="1" colspan="1" style="width: 150px;" aria-label="Creator: activate to sort column ascending">Creator</th><th class="sorting" tabindex="0" aria-controls="modulestable" rowspan="1" colspan="1" style="width: 230px;" aria-label="Date Created: activate to sort column ascending">Date Created</th></tr>
              </thead><tbody><tr class="odd"><td class="sorting_1">1</td><td>Dev-Tools</td><td>bi bi-code</td><td>Peter Mukisa</td><td>2025-07-07 08:43:14</td></tr><tr class="even"><td class="sorting_1">2</td><td>Inventory</td><td>bi bi-box-seam</td><td>Peter Mukisa</td><td>2025-06-27 22:57:52</td></tr><tr class="odd"><td class="sorting_1">4</td><td>Suppliers</td><td>bi bi-truck</td><td>Peter Mukisa</td><td>2025-06-27 23:37:01</td></tr><tr class="even"><td class="sorting_1">5</td><td>Orders</td><td>bi bi-receipt</td><td>Peter Mukisa</td><td>2025-06-27 22:58:52</td></tr><tr class="odd"><td class="sorting_1">6</td><td>Users</td><td>bi bi-people-fill</td><td>Peter Mukisa</td><td>2025-06-30 12:11:36</td></tr><tr class="even"><td class="sorting_1">7</td><td>Expenses</td><td>bi bi-cash-stack</td><td>Peter Mukisa</td><td>2025-06-27 22:59:45</td></tr><tr class="odd"><td class="sorting_1">8</td><td>Reports</td><td>bi bi-bar-chart-line</td><td>Peter Mukisa</td><td>2025-06-27 23:00:16</td></tr><tr class="even"><td class="sorting_1">9</td><td>System Admin</td><td>bi bi-shield-lock</td><td>Peter Mukisa</td><td>2025-07-07 18:29:20</td></tr><tr class="odd"><td class="sorting_1">10</td><td>Notifications</td><td>bi bi-bell-fill</td><td>Peter Mukisa</td><td>2025-06-27 23:31:36</td></tr><tr class="even"><td class="sorting_1">11</td><td>Management</td><td>bi bi-gear</td><td>Peter Mukisa</td><td>2025-07-07 18:30:10</td></tr></tbody>
            </table><div class="dataTables_info" id="modulestable_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div><div class="dataTables_paginate paging_simple_numbers" id="modulestable_paginate"><a class="paginate_button previous disabled" aria-controls="modulestable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="modulestable_previous">Previous</a><span><a class="paginate_button current" aria-controls="modulestable" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="modulestable" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" id="modulestable_next">Next</a></div></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Roles Pane -->
    <div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="roles-tab">
      <div class="card customized-card">
        <div class="card-body p-4">
          <div class="col-lg-12">
            <div id="toolbar" class="mb-4 pb-3">
              <a href="#" class="btn btn-primary btn-flat btn-sm create_role me-2"><i class="fa fa-plus-circle me-2"></i>Add</a>
              <a href="#" class="btn btn-outline-success btn-flat btn-sm editrole me-2"><i class="fa fa-edit me-2"></i>Edit</a>
              <a href="#" class="btn btn-outline-danger btn-flat btn-sm deleterole me-2"><i class="fa fa-trash me-2"></i>Delete Role</a>
            </div>
          </div>
          <div class="table-responsive customized-table-container">
            <div id="rolestable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="rolestable_length"><label>Show <select name="rolestable_length" aria-controls="rolestable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="rolestable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="rolestable"></label></div><div id="rolestable_processing" class="dataTables_processing" role="status" style="display: none;"><div><div></div><div></div><div></div><div></div></div></div><table id="rolestable" class="table display nowrap table-stripped customized-table dataTable no-footer" aria-describedby="rolestable_info" style="width: 0px;">
              <thead>
                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="rolestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="No.: activate to sort column descending" aria-sort="ascending">No.</th><th class="sorting" tabindex="0" aria-controls="rolestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="System Role: activate to sort column ascending">System Role</th><th class="sorting" tabindex="0" aria-controls="rolestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Role Icon: activate to sort column ascending">Role Icon</th><th class="sorting" tabindex="0" aria-controls="rolestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Role Link: activate to sort column ascending">Role Link</th><th class="sorting" tabindex="0" aria-controls="rolestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Creator: activate to sort column ascending">Creator</th><th class="sorting" tabindex="0" aria-controls="rolestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Date Created: activate to sort column ascending">Date Created</th></tr>
              </thead><tbody><tr class="odd"><td class="sorting_1">1</td><td>Products</td><td>bi bi-list-ul</td><td>products</td><td>Peter Mukisa</td><td>2025-06-27 23:02:27</td></tr><tr class="even"><td class="sorting_1">2</td><td>Categories &amp; Units</td><td>bi bi-tags</td><td>product-brand-categories</td><td>Peter Mukisa</td><td>2025-06-27 23:04:09</td></tr><tr class="odd"><td class="sorting_1">3</td><td>Customers Lists</td><td>bi bi-person-lines-fill</td><td>customers</td><td>Peter Mukisa</td><td>2025-06-27 23:04:54</td></tr><tr class="even"><td class="sorting_1">4</td><td>Suppliers List</td><td>bi bi-truck</td><td>suppliers</td><td>Peter Mukisa</td><td>2025-07-07 08:07:20</td></tr><tr class="odd"><td class="sorting_1">5</td><td>Purchase Orders</td><td>bi bi-journal-text</td><td>purchases</td><td>Peter Mukisa</td><td>2025-06-27 23:05:56</td></tr><tr class="even"><td class="sorting_1">6</td><td>Place Orders</td><td>bi bi-cart4</td><td>orders</td><td>Peter Mukisa</td><td>2025-07-07 07:39:03</td></tr><tr class="odd"><td class="sorting_1">7</td><td>System Users</td><td>bi bi-person-lines-fill</td><td>users</td><td>Peter Mukisa</td><td>2025-06-27 23:10:04</td></tr><tr class="even"><td class="sorting_1">8</td><td>User Groups</td><td>bi bi-people</td><td>usergroups</td><td>Peter Mukisa</td><td>2025-06-27 23:12:23</td></tr><tr class="odd"><td class="sorting_1">9</td><td>System Roles</td><td>bi bi-hdd-network</td><td>systemconfigs</td><td>Peter Mukisa</td><td>2025-07-07 18:32:19</td></tr><tr class="even"><td class="sorting_1">10</td><td>Payment Methods</td><td>bi bi-cash-coin</td><td>payment-methods</td><td>Peter Mukisa</td><td>2025-06-28 00:37:02</td></tr></tbody>
            </table><div class="dataTables_info" id="rolestable_info" role="status" aria-live="polite">Showing 1 to 10 of 31 entries</div><div class="dataTables_paginate paging_simple_numbers" id="rolestable_paginate"><a class="paginate_button previous disabled" aria-controls="rolestable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="rolestable_previous">Previous</a><span><a class="paginate_button current" aria-controls="rolestable" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="rolestable" role="link" data-dt-idx="1" tabindex="0">2</a><a class="paginate_button " aria-controls="rolestable" role="link" data-dt-idx="2" tabindex="0">3</a><a class="paginate_button " aria-controls="rolestable" role="link" data-dt-idx="3" tabindex="0">4</a></span><a class="paginate_button next" aria-controls="rolestable" role="link" data-dt-idx="next" tabindex="0" id="rolestable_next">Next</a></div></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Specs Pane -->
    <div class="tab-pane fade" id="specs" role="tabpanel" aria-labelledby="specs-tab">
      <div class="card customized-card">
        <div class="card-header">
        </div>
        <div class="card-body p-4">
          <div class="col-lg-12">
            <div class="row d-flex justify-content-between align-items-center">
    <!-- Left side buttons -->
    <div id="toolbar" class="mb-4 pb-3 col-lg-6 d-flex">
              <a href="#" class="btn btn-outline-danger btn-flat btn-sm deletespec me-2"><i class="fa fa-trash me-2"></i>Remove Functional Spec</a>
    </div>

    <!-- Right side buttons -->
    <div id="customButtonsContainer" class="mb-4 pb-3 col-lg-6 d-flex justify-content-end">
    <div class="dt-buttons btn-group flex-wrap">          <button class="btn btn-secondary buttons-copy buttons-html5 btn-flat btn-sm" tabindex="0" aria-controls="specstable" type="button"><span><i class="fa fa-copy"></i> Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5 btn-success btn-flat btn-sm" tabindex="0" aria-controls="specstable" type="button"><span><i class="fa fa-file-csv"></i> CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5 btn-success btn-flat btn-sm" tabindex="0" aria-controls="specstable" type="button"><span><i class="fa fa-file-excel"></i> Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5 btn-danger btn-flat btn-sm" tabindex="0" aria-controls="specstable" type="button"><span><i class="fa fa-file-pdf"></i> PDF</span></button> <button class="btn btn-secondary buttons-print btn-info" tabindex="0" aria-controls="specstable" type="button"><span><i class="fa fa-print"></i> Print</span></button> </div></div>
          </div>
          <div class="table-responsive customized-table-container">
            <div id="specstable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="specstable_length"><label>Show <select name="specstable_length" aria-controls="specstable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="250">250</option><option value="500">500</option></select> entries</label></div><div id="specstable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="specstable"></label></div><div id="specstable_processing" class="dataTables_processing" role="status" style="display: none;"><div><div></div><div></div><div></div><div></div></div></div><table id="specstable" class="table display nowrap table-stripped customized-table dataTable no-footer" aria-describedby="specstable_info" style="width: 0px;">
              <thead>
                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="specstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="No.: activate to sort column descending" aria-sort="ascending">No.</th><th class="sorting" tabindex="0" aria-controls="specstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="System Module: activate to sort column ascending">System Module</th><th class="sorting" tabindex="0" aria-controls="specstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Assigned Role: activate to sort column ascending">Assigned Role</th><th class="sorting" tabindex="0" aria-controls="specstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Role Icon: activate to sort column ascending">Role Icon</th><th class="sorting" tabindex="0" aria-controls="specstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Role Link: activate to sort column ascending">Role Link</th><th class="sorting" tabindex="0" aria-controls="specstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Creator: activate to sort column ascending">Creator</th><th class="sorting" tabindex="0" aria-controls="specstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Date Created: activate to sort column ascending">Date Created</th></tr>
              </thead><tbody><tr class="odd"><td class="sorting_1">1</td><td>Orders</td><td>Place Orders</td><td>bi bi-cart4</td><td>orders</td><td>Peter Mukisa</td><td>2025-07-07 07:55:45</td></tr><tr class="even"><td class="sorting_1">2</td><td>Notifications</td><td>Chat</td><td>bi bi-chat-dots</td><td>chat</td><td>Peter Mukisa</td><td>2025-07-07 07:56:24</td></tr><tr class="odd"><td class="sorting_1">3</td><td>Notifications</td><td>View Notifications</td><td>bi bi-envelope-fill</td><td>notifications</td><td>Peter Mukisa</td><td>2025-07-07 07:56:30</td></tr><tr class="even"><td class="sorting_1">4</td><td>Inventory</td><td>Products</td><td>bi bi-list-ul</td><td>products</td><td>Peter Mukisa</td><td>2025-07-07 07:57:20</td></tr><tr class="odd"><td class="sorting_1">5</td><td>Inventory</td><td>Manage Inventory</td><td>bi bi-boxes</td><td>inventory/stock</td><td>Peter Mukisa</td><td>2025-07-07 07:57:30</td></tr><tr class="even"><td class="sorting_1">7</td><td>Inventory</td><td>View Sales</td><td>bi bi-cart4</td><td>sales</td><td>Peter Mukisa</td><td>2025-07-07 07:57:40</td></tr><tr class="odd"><td class="sorting_1">8</td><td>Orders</td><td>Returns</td><td>bi bi-arrow-counterclockwise</td><td>returns</td><td>Peter Mukisa</td><td>2025-07-07 08:00:55</td></tr><tr class="even"><td class="sorting_1">9</td><td>System Admin</td><td>System Settings</td><td>bi bi-cloud-arrow-down</td><td>system</td><td>Peter Mukisa</td><td>2025-07-07 08:01:47</td></tr><tr class="odd"><td class="sorting_1">10</td><td>System Admin</td><td>Licenses</td><td>bi bi-key</td><td>tools/licenses</td><td>Peter Mukisa</td><td>2025-07-07 08:02:14</td></tr><tr class="even"><td class="sorting_1">11</td><td>System Admin</td><td>Backups</td><td>bi bi-database</td><td>backups</td><td>Peter Mukisa</td><td>2025-07-07 08:03:13</td></tr></tbody>
            </table><div class="dataTables_info" id="specstable_info" role="status" aria-live="polite">Showing 1 to 10 of 28 entries</div><div class="dataTables_paginate paging_simple_numbers" id="specstable_paginate"><a class="paginate_button previous disabled" aria-controls="specstable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="specstable_previous">Previous</a><span><a class="paginate_button current" aria-controls="specstable" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="specstable" role="link" data-dt-idx="1" tabindex="0">2</a><a class="paginate_button " aria-controls="specstable" role="link" data-dt-idx="2" tabindex="0">3</a></span><a class="paginate_button next" aria-controls="specstable" role="link" data-dt-idx="next" tabindex="0" id="specstable_next">Next</a></div></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
let table = null;
let roletable = null;
let spectable = null;
let selectedmodule = null;
let selectedrole = null;
let selectedspec = null;
let unsignedtable = null;
let assignedtable = null;
let leftrole = null;
let rightrole = null;
$(async () => {
    loadDataLabel();
});
const loadDataLabel = () => {
  table = $("#modulestable").DataTable({
    responsive: true,
    processing: true,
    ajax: {
      url:_base_url_+"classes/Systemconfigs.php?f=viewallmodules",
      dataSrc: "",
    },
    columns: [
      { data: "id" }, { data: "modulename" }, { data: "icon" }, { data: "creator" }, { data: "modificationDate" },
    ],
  });

    $("#modulestable tbody").on("click", "tr", function () {
    if ($(this).hasClass("selected")) {
      $(this).removeClass("selected");
    } else {
      table.$("tr.selected").removeClass("selected");
      $(this).addClass("selected");
      var selectedIndex = table.row(".selected",{selected:true}).index();
      var selectedRow = table.row(selectedIndex).data();
      selectedmodule = selectedRow.id;
    }
  });


    roletable = $("#rolestable").DataTable({
    responsive: true,
    processing: true,
    ajax: {
      url:_base_url_+"classes/Systemconfigs.php?f=viewallroles",
      dataSrc: "",
    },
    columns: [
      { data: "id" }, { data: "rolename" }, { data: "icon" }, { data: "link" }, { data: "creator" }, { data: "modificationDate" },
    ],
  });

    $("#rolestable tbody").on("click", "tr", function () {
    if ($(this).hasClass("selected")) {
      $(this).removeClass("selected");
    } else {
      roletable.$("tr.selected").removeClass("selected");
      $(this).addClass("selected");
      var selectedIndex = roletable.row(".selected",{selected:true}).index();
      var selectedRow = roletable.row(selectedIndex).data();
      selectedrole = selectedRow.id;
    }
  });

    spectable = $("#specstable").DataTable({
    responsive: true,
    processing: true,
    lengthMenu: [ [10, 25, 50, 100, 250, 500], [10, 25, 50, 100, 250, 500] ],

    dom: 'lBfrtip',
buttons: [
  {
    extend: 'copy',
    text: '<i class="fa fa-copy"></i> Copy',
    className: 'btn btn-secondary btn-flat btn-sm',
    exportOptions: { columns: ':not(:last-child)' }
  },
  {
    extend: 'csv',
    text: '<i class="fa fa-file-csv"></i> CSV',
    className: 'btn btn-success btn-flat btn-sm',
    exportOptions: { columns: ':not(:last-child)' }
  },
  {
    extend: 'excel',
    text: '<i class="fa fa-file-excel"></i> Excel',
    className: 'btn btn-success btn-flat btn-sm',
    exportOptions: { columns: ':not(:last-child)' }
  },
  {
    extend: 'pdf',
    text: '<i class="fa fa-file-pdf"></i> PDF',
    className: 'btn btn-danger btn-flat btn-sm',
    exportOptions: { columns: ':not(:last-child)' }
  },
  {
    extend: 'print',
    text: '<i class="fa fa-print"></i> Print',
    className: 'btn btn-info',
    exportOptions: { columns: ':not(:last-child)' }
  }
]
,
    initComplete: function() {
    // Move buttons to custom container
    var btns = $('.dt-buttons').detach();
    $('#customButtonsContainer').append(btns);
  },
    ajax: {
      url:_base_url_+"classes/Systemconfigs.php?f=viewallfunctionalspecs",
      dataSrc: "",
    },
    columns: [
      { data: "id" }, { data: "modulename" }, { data: "rolename" }, { data: "icon" }, { data: "link" }, { data: "creator" }, { data: "modificationDate" },
    ],
  });

    $("#specstable tbody").on("click", "tr", function () {
    if ($(this).hasClass("selected")) {
      $(this).removeClass("selected");
    } else {
      spectable.$("tr.selected").removeClass("selected");
      $(this).addClass("selected");
      var selectedIndex = spectable.row(".selected",{selected:true}).index();
      var selectedRow = spectable.row(selectedIndex).data();
      selectedspec = selectedRow.id;
    }
  });

}

	$(document).ready(function(){
		$('.deletemodule').click(function(){
        if(selectedmodule == null){
    toastr.error("Please select a module to delete");
    return;
  }
			_conf("Are you sure to delete this module","delete_module");
		})

		$('.create_new').click(function(){
			uni_modal('Add New Module', _base_url_+"models/systemconfigs/newmodule.php",'large');
		})
		$('.edit').click(function(){
    if(selectedmodule == null){
    toastr.error("Please select a module to edit");
    return;
    }
			uni_modal('Edit Module', _base_url_+"models/systemconfigs/newmodule.php?id="+selectedmodule,'large');
		})

    $('.deleterole').click(function(){
        if(selectedrole == null){
    toastr.error("Please select a role to delete");
    return;
  }
			_conf("Are you sure to delete this role","delete_role");
		})

      $('.deletespec').click(function(){
    if(selectedspec == null){
    toastr.error("Please select a functional spec to delete");
    return;
  }
			_conf("Are you sure to delete this spec","delete_spec");
		})

		$('.create_role').click(function(){
			uni_modal('Add New Role', _base_url_+"models/systemconfigs/newrole.php",'large');
		})
		$('.editrole').click(function(){
    if(selectedrole == null){
    toastr.error("Please select a role to edit");
    return;
    }
			uni_modal('Edit Role', _base_url_+"models/systemconfigs/newrole.php?id="+selectedrole,'large');
		})

    $('.assignroles').click(function(){
    if(selectedmodule == null){
    toastr.error("Please select a module to assign roles");
    return;
    }
			uni_modal('Assign Role', _base_url_+"models/systemconfigs/assignroles.php?id="+selectedmodule,'large');
		})

		$('.table').dataTable();
	})

function delete_module() {
  $.post(_base_url_ + 'classes/Systemconfigs.php?f=deletemodule', { id: selectedmodule }, 
  function(data){
    var resp = JSON.parse(data);
    if(resp.status == 'success'){
    table.ajax.reload();
    selectedmodule = null;
    $('#confirm_modal').modal('hide');
      toastr.success(resp.msg);
    }else{
      toastr.error(resp.msg);
    }
  }
);
}

function delete_role() {
  $.post(_base_url_ + 'classes/Systemconfigs.php?f=deleterole', { id: selectedrole }, 
  function(data){
    var resp = JSON.parse(data);
    if(resp.status == 'success'){
    table.ajax.reload();
    selectedmodule = null;
    $('#confirm_modal').modal('hide');
      toastr.success(resp.msg);
    }else{
      toastr.error(resp.msg);

    }
  }
);
}

function delete_spec() {
  $.post(_base_url_ + 'classes/Systemconfigs.php?f=deletefunctionalspec', { id: selectedspec }, 
  function(data){
    var resp = JSON.parse(data);
    if(resp.status == 'success'){
    spectable.ajax.reload();
    selectedspec = null;
    $('#confirm_modal').modal('hide');
      toastr.success(resp.msg);
    }else{
      toastr.error(resp.msg);

    }
  }
);
}

</script>      </div>