<div class="app-content">

        <style>
  .menu1 {
    height: 100%;
    border-right: 1px solid #dee2e6;
    overflow-y: auto;
  }

  .report-section {
    background-color: white;
    padding: 20px;
  }

  .topbar {
    border-bottom: 1px solid #dee2e6;
    padding: 10px 20px;
    background-color: #f1f1f1;
  }

  .report-table th,
  .report-table td {
    font-size: 14px;
    vertical-align: middle;
  }

  .active-report {
    background-color: #007bff !important;
    color: white !important;
    font-weight: bold;
    border-radius: 4px;
    padding: 2px 6px;
  }


  .logo {
    width: 80px;
  }

  .company-details {
    text-align: right;
    font-size: 14px;
  }

  .menu1 ul {
    padding-left: 1.2rem;
    position: relative;
    margin-top: 5px;
  }

  .menu1 ul::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0.3rem;
    width: 1px;
    background: #ccc;
  }

  .menu1 ul li {
    position: relative;
    padding-left: 1.2rem;
    margin-bottom: 4px;
    line-height: 1.4;
  }

  .menu1 ul li::before {
    content: '';
    position: absolute;
    top: 0.6em;
    left: 0;
    width: 1rem;
    height: 1px;
    background: #ccc;
  }

  .menu1-item {
    font-weight: bold;
    margin-top: 8px;
    cursor: pointer;
  }

  .menu1-item .toggle-icon {
    margin-left: auto;
    font-weight: normal;
  }


  .list-unstyled li:hover {
    cursor: pointer;
    font-weight: bold;
  }

  .list-unstyled li:active {
    font-weight: bold;
  }
</style>
<div class="container-fluid">
  <div class="topbar d-flex justify-content-between">
    <h5>POINT OF SALES REPORTS</h5>
    <div>
      <a href="#" title="Filter this report" class="me-3 text-decoration-none text-secondary filter"><i class="bi bi-filter"></i> Filter</a>
      <a href="#" onclick="saveDivAsPDF('printablereport')" title="Save report as pdf file" class="me-3 text-decoration-none text-danger"><i class="fa fa-file-pdf"></i> PDF</a>
      <a href="#" onclick="exportCSV()" title="Save report as csv file" class="me-3 text-decoration-none text-dark"><i class="fa fa-file-csv"></i> CSV</a>
      <a href="#" onclick="exportExcel()" title="Save report as excel file" class="me-3 text-decoration-none text-success"><i class="fa fa-file-excel"></i> Excel</a>
      <a href="#" onclick="printDiv('printablereport')" title="Print this report" class="text-decoration-none"><i class="fa fa-print"></i> Print</a>
    </div>
  </div>

  <div class="row" style="height: calc(100vh - 60px);">
    <!-- Sidebar Menu -->
    <div class="col-md-3 menu1 bg-white p-3">
      
        <div class="menu1-item d-flex justify-content-between align-items-center" data-target="#Products1Menu">
          <span>📁 Products</span>
          <span class="toggle-icon">+</span>
        </div>

        <ul class="list-unstyled collapse" id="Products1Menu">
                      <li onclick="fetchReport(1)">📄 All Products</li>
                      <li onclick="fetchReport(2)">📄 Products Out of Stock</li>
                      <li onclick="fetchReport(7)">📄 Below Re-order Level</li>
                      <li onclick="fetchReport(8)">📄 Product Suppliers</li>
                  </ul>

      
        <div class="menu1-item d-flex justify-content-between align-items-center" data-target="#Orders2Menu">
          <span>📁 Orders</span>
          <span class="toggle-icon">+</span>
        </div>

        <ul class="list-unstyled collapse" id="Orders2Menu">
                      <li onclick="fetchReport(3)">📄 All Orders</li>
                      <li onclick="fetchReport(11)">📄 Orders This Month</li>
                  </ul>

      
        <div class="menu1-item d-flex justify-content-between align-items-center" data-target="#Cashiers3Menu">
          <span>📁 Cashiers</span>
          <span class="toggle-icon">+</span>
        </div>

        <ul class="list-unstyled collapse" id="Cashiers3Menu">
                      <li onclick="fetchReport(4)">📄 Cashier sales</li>
                      <li onclick="fetchReport(5)">📄 Cashier Sales Today</li>
                  </ul>

      
        <div class="menu1-item d-flex justify-content-between align-items-center" data-target="#Inventory4Menu">
          <span>📁 Inventory</span>
          <span class="toggle-icon">+</span>
        </div>

        <ul class="list-unstyled collapse" id="Inventory4Menu">
                      <li onclick="fetchReport(6)">📄 Inventory Logs</li>
                  </ul>

      
        <div class="menu1-item d-flex justify-content-between align-items-center" data-target="#SystemUsers5Menu">
          <span>📁 System Users</span>
          <span class="toggle-icon">+</span>
        </div>

        <ul class="list-unstyled collapse" id="SystemUsers5Menu">
                      <li onclick="fetchReport(9)">📄 User Roles</li>
                      <li onclick="fetchReport(10)">📄 All System Users</li>
                  </ul>

      
        <div class="menu1-item d-flex justify-content-between align-items-center" data-target="#CashDrawers6Menu">
          <span>📁 Cash Drawers</span>
          <span class="toggle-icon">+</span>
        </div>

        <ul class="list-unstyled collapse" id="CashDrawers6Menu">
                      <li onclick="fetchReport(14)">📄 Anual Cash Drawers</li>
                      <li onclick="fetchReport(12)">📄 Daily Cash Drawers</li>
                      <li onclick="fetchReport(13)">📄 Monthly Cash Drawers</li>
                  </ul>

          </div>



    <!-- Preview Report -->
    <div class="col-md-9 report-section" id="printablereport">
      <div class="d-flex justify-content-between align-items-start mb-4">
        <img src="public/assets/images/1752575735shanz.png" alt="Logo" class="logo"> <!-- Replace with your logo -->
        <div class="company-details">
          <strong>POINT OF SALES</strong><br>
          Kireka, Opposite Eco Petrol Station<br>
          P.O BOX 3039 Kampala.<br>
          Email: info@pearl-host.com        </div>
      </div>

      <div style="overflow-y: scroll; overflow-x: scroll; max-width: 100%; max-height: 100vh;">
        <div id="reportView">
          


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Animated Padlock Message</title>
<style>
  .repo {
    display: flex;
    margin: 10;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .locked-message {
    border-radius: 12px;
    padding: 2rem 3rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    animation: fadeInScale 0.6s ease forwards;
  }

  .padlock {
    font-size: 4rem;
    color: #ff6b6b;
    animation: swing 2s ease-in-out infinite;
  }

  .message {
    font-size: 1.2rem;
    color: #333;
    text-align: center;
  }

  @keyframes swing {
    0%, 100% { transform: rotate(0deg); }
    25% { transform: rotate(15deg); }
    50% { transform: rotate(-15deg); }
    75% { transform: rotate(10deg); }
  }

  @keyframes fadeInScale {
    0% {
      opacity: 0;
      transform: scale(0.8);
    }
    100% {
      opacity: 1;
      transform: scale(1);
    }
  }
</style>

<div class="repo">

<div class="locked-message">
  <div class="padlock">🔒</div>
  <div class="message">Please select a report to view</div>
</div>

</div>

        </div>
        
      </div>
    </div>
  </div>
  <script>
    let reportId = null;
    const fetchReport = (id) => {
      reportId = id;
      $.get(_base_url_ + 'classes/Tools.php?f=view_report&id=' + id, function (data) {
        $('#reportView').html(data);
      })
    }

    $(document).ready(function () {
      // Handle menu toggle and icon switching
      $('.menu1-item').on('click', function () {
        const $target = $($(this).data('target'));
        const $icon = $(this).find('.toggle-icon');

        // Optionally collapse others:
        // $('.collapse').not($target).collapse('hide');

        $target.collapse('toggle');

        $target.on('shown.bs.collapse', function () {
          $icon.text('−');
        });

        $target.on('hidden.bs.collapse', function () {
          $icon.text('+');
        });
      });

      // Highlight selected report
      $('.menu1 ul li').on('click', function () {
        $('.menu1 ul li').removeClass('active-report');
        $(this).addClass('active-report');
      });
    });



    function exportExcel() {
      if (reportId == null) {
        return toastr.error('Select report first');
      }
      const url = _base_url_ + "classes/Tools.php?f=view_report_json&id=" + reportId;

      $.get(url, function (data) {
        let response = [];

        try {
          response = JSON.parse(data);
        } catch (e) {
          toastr.error("Failed to parse JSON response.");
          return;
        }

        if (!Array.isArray(response) || response.length === 0) {
          toastr.error("No data to export.");
          return;
        }

        // Convert JSON to worksheet
        const worksheet = XLSX.utils.json_to_sheet(response);

        // Create a new workbook and append the worksheet
        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, "Report");

        // Export workbook to file
        const timestamp = new Date().toISOString().replace(/[:.-]/g, "_"); // e.g. 2025_07_11T10_45_30
        const filename = `report_${timestamp}.xlsx`;
        XLSX.writeFile(workbook, filename);

      });
    }


    function exportCSV() {
      if (reportId == null) {
        return toastr.error('Select report first');
      }
      const url = _base_url_ + "classes/Tools.php?f=view_report_json&id=" + reportId;

      $.get(url, function (data) {
        let response = [];

        try {
          response = JSON.parse(data);
        } catch (e) {
          toastr.error("Failed to parse JSON response.");
          return;
        }

        if (!Array.isArray(response) || response.length === 0) {
          toastr.error("No data to export.");
          return;
        }

        // Convert JSON to worksheet
        const worksheet = XLSX.utils.json_to_sheet(response);

        // Convert worksheet to CSV string
        const csv = XLSX.utils.sheet_to_csv(worksheet);

        // Create a blob and trigger CSV download
        const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });

        // Generate timestamped filename
        const timestamp = new Date().toISOString().replace(/[:.-]/g, "_"); // e.g. 2025_07_11T10_45_30
        const filename = `report_${timestamp}.csv`;

        if (navigator.msSaveBlob) { // For IE 10+
          navigator.msSaveBlob(blob, filename);
        } else {
          const link = document.createElement("a");
          if (link.download !== undefined) { // feature detection
            const url = URL.createObjectURL(blob);
            link.setAttribute("href", url);
            link.setAttribute("download", filename);
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
          }
        }
      });
    }

    function printDiv(divId) {
      if (reportId == null) {
        return toastr.error('Select report first');
      }
      var content = document.getElementById(divId).innerHTML;
      document.body.innerHTML = content;
      window.print();
      location.reload();
    }
    function saveDivAsPDF(divId) {
      if (reportId == null) {
        return toastr.error('Select report first');
      }

      const element = document.getElementById(divId);

      // Set the element width to full A4 width (8.27 inches)
      element.style.width = '8.27in';

      const opt = {
        margin: 0, // No margin to use full page
        filename: 'report.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 }, // Higher scale = better quality
        jsPDF: {
          unit: 'in',
          format: 'a4',
          orientation: 'portrait'
        }
      };

      html2pdf().set(opt).from(element).save();
    }
    $('.filter').click(function () {
      if (reportId == null) {
        return toastr.error('Select report first');
      }
      $.get(_base_url_ +'classes/Tools.php?f=checkfilter&id='+ reportId, function(data){
        var resp = JSON.parse(data)
          if(resp.status == 'success'){
            uni_modal('Filter Report', _base_url_ + "models/reports/filter.php?id=" + reportId, 'large');
          }else{
            toastr.error('This report cannot be filtered');
          }
      });
      
    })
  </script>      </div>

    </div>