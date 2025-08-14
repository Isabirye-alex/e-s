<div class="container mt-4">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="categories-tab" data-bs-toggle="tab" data-bs-target="#categories" type="button" role="tab" aria-selected="true">Products Categories</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="subcategories-tab" data-bs-toggle="tab" data-bs-target="#subcategories" type="button" role="tab" aria-selected="false" tabindex="-1">Product Sub Categories</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="brands-tab" data-bs-toggle="tab" data-bs-target="#brands" type="button" role="tab" aria-selected="false" tabindex="-1">Brands</button>
    </li>

    <li class="nav-item" role="taxes">
      <button class="nav-link" id="taxes-tab" data-bs-toggle="tab" data-bs-target="#taxes" type="button" role="tab" aria-selected="false" tabindex="-1">Taxes</button>
    </li>

    <li class="nav-item" role="units">
      <button class="nav-link" id="units-tab" data-bs-toggle="tab" data-bs-target="#units" type="button" role="tab" aria-selected="false" tabindex="-1">Units</button>
    </li>


  </ul>

  <div class="tab-content pt-3" id="myTabContent">
    
  
    <div class="tab-pane fade show active" id="categories" role="tabpanel" aria-labelledby="categories-tab">
      <div class="card customized-card">
        <div class="card-body p-4">
          <div class="col-lg-12">
            <div id="toolbar" class="mb-4 pb-3">
              <a href="#" class="btn btn-primary btn-flat btn-sm create_new me-2"><i class="fa fa-plus-circle me-2"></i>Add</a>
              <a href="#" class="btn btn-outline-success btn-flat btn-sm edit me-2"><i class="fa fa-edit me-2"></i>Edit</a>
              <a href="#" class="btn btn-outline-danger btn-flat btn-sm deletecategory me-2"><i class="fa fa-trash me-2"></i>Delete</a>
            </div>
          </div>
          <div class="table-responsive customized-table-container">
            <div id="categoriestable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="categoriestable_length"><label>Show <select name="categoriestable_length" aria-controls="categoriestable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="categoriestable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="categoriestable"></label></div><div id="categoriestable_processing" class="dataTables_processing" role="status" style="display: none;"><div><div></div><div></div><div></div><div></div></div></div><table id="categoriestable" class="table display nowrap table-stripped customized-table dataTable no-footer" aria-describedby="categoriestable_info" style="width: 997px;">
              <thead>
                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="categoriestable" rowspan="1" colspan="1" style="width: 36px;" aria-label="No.: activate to sort column descending" aria-sort="ascending">No.</th><th class="sorting" tabindex="0" aria-controls="categoriestable" rowspan="1" colspan="1" style="width: 214px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="categoriestable" rowspan="1" colspan="1" style="width: 445px;" aria-label="Description: activate to sort column ascending">Description</th><th class="sorting" tabindex="0" aria-controls="categoriestable" rowspan="1" colspan="1" style="width: 142px;" aria-label="Sub Categories: activate to sort column ascending">Sub Categories</th></tr>
              </thead><tbody><tr class="odd"><td class="sorting_1">1</td><td>Fresh Produce</td><td>Fruits, vegetables, herbs and more</td><td>8</td></tr><tr class="even"><td class="sorting_1">2</td><td>Meat &amp; Poultry</td><td>All types of fresh and processed meats</td><td>4</td></tr><tr class="odd"><td class="sorting_1">3</td><td>Seafood</td><td>Fresh and frozen fish, shellfish and seafood products</td><td>5</td></tr><tr class="even"><td class="sorting_1">4</td><td>Dairy &amp; Eggs</td><td>Milk, cheese, butter, eggs and dairy alternatives</td><td>5</td></tr><tr class="odd"><td class="sorting_1">5</td><td>Bakery &amp; Bread</td><td>Fresh bread, pastries and baked goods</td><td>6</td></tr><tr class="even"><td class="sorting_1">6</td><td>Pantry &amp; Dry Goods</td><td>Shelf-stable goods , grains, pasta, sauces</td><td>4</td></tr><tr class="odd"><td class="sorting_1">7</td><td>Breakfast &amp; Cereals</td><td>Cereals, porridge, breakfast spreads</td><td>6</td></tr><tr class="even"><td class="sorting_1">8</td><td>Snacks &amp; Confectionery</td><td>Chips, cookies, candy, nuts and chocolates</td><td>6</td></tr><tr class="odd"><td class="sorting_1">9</td><td>Beverages</td><td>Water, soda, juice, tea and coffee</td><td>4</td></tr><tr class="even"><td class="sorting_1">10</td><td>Frozen Foods</td><td>Frozen meals, vegetables, pizza, ice cream</td><td>5</td></tr></tbody>
            </table><div class="dataTables_info" id="categoriestable_info" role="status" aria-live="polite">Showing 1 to 10 of 17 entries</div><div class="dataTables_paginate paging_simple_numbers" id="categoriestable_paginate"><a class="paginate_button previous disabled" aria-controls="categoriestable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="categoriestable_previous">Previous</a><span><a class="paginate_button current" aria-controls="categoriestable" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="categoriestable" role="link" data-dt-idx="1" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="categoriestable" role="link" data-dt-idx="next" tabindex="0" id="categoriestable_next">Next</a></div></div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="subcategories" role="tabpanel" aria-labelledby="subcategories-tab">
      <div class="card customized-card">
        <div class="card-body p-4">
          <div class="col-lg-12">
            <div id="toolbar" class="mb-4 pb-3">
              <a href="#" class="btn btn-primary btn-flat btn-sm new_subcategory me-2"><i class="fa fa-plus-circle me-2"></i>Add</a>
              <a href="#" class="btn btn-outline-success btn-flat btn-sm editsubcategory me-2"><i class="fa fa-edit me-2"></i>Edit</a>
              <a href="#" class="btn btn-outline-danger btn-flat btn-sm deletesubcategory me-2"><i class="fa fa-trash me-2"></i>Delete</a>
            </div>
          </div>
          <div class="table-responsive customized-table-container">
            <div id="subcategoriestable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="subcategoriestable_length"><label>Show <select name="subcategoriestable_length" aria-controls="subcategoriestable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="subcategoriestable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="subcategoriestable"></label></div><div id="subcategoriestable_processing" class="dataTables_processing" role="status" style="display: none;"><div><div></div><div></div><div></div><div></div></div></div><table id="subcategoriestable" class="table display nowrap table-stripped customized-table dataTable no-footer" width="100%" aria-describedby="subcategoriestable_info" style="width: 100%;">
              <thead>
                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="subcategoriestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="No.: activate to sort column descending" aria-sort="ascending">No.</th><th class="sorting" tabindex="0" aria-controls="subcategoriestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="subcategoriestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Description: activate to sort column ascending">Description</th><th class="sorting" tabindex="0" aria-controls="subcategoriestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Main Category: activate to sort column ascending">Main Category</th><th class="sorting" tabindex="0" aria-controls="subcategoriestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="No. of Products: activate to sort column ascending">No. of Products</th></tr>
              </thead><tbody><tr class="odd"><td class="sorting_1">1</td><td>Fruits</td><td>All seasonal and imported fruits</td><td>Fresh Produce</td><td>16</td></tr><tr class="even"><td class="sorting_1">2</td><td>Vegetables</td><td>Leafy greens, root vegetables, etc.</td><td>Fresh Produce</td><td>2</td></tr><tr class="odd"><td class="sorting_1">3</td><td>Herbs &amp; Spices</td><td>Fresh herbs and natural spices</td><td>Fresh Produce</td><td>2</td></tr><tr class="even"><td class="sorting_1">4</td><td>Organic Produce</td><td>Certified organic fruits and vegetables</td><td>Fresh Produce</td><td>2</td></tr><tr class="odd"><td class="sorting_1">5</td><td>Red Meat</td><td>Beef, mutton, lamb, veal</td><td>Fresh Produce</td><td>1</td></tr><tr class="even"><td class="sorting_1">6</td><td>White Meat</td><td>Chicken, turkey, duck</td><td>Fresh Produce</td><td>0</td></tr><tr class="odd"><td class="sorting_1">7</td><td>Processed Meats</td><td>Sausages, ham, bacon, salami</td><td>Fresh Produce</td><td>0</td></tr><tr class="even"><td class="sorting_1">8</td><td>Marinated Meats</td><td>Ready-to-cook spiced meat options</td><td>Fresh Produce</td><td>0</td></tr><tr class="odd"><td class="sorting_1">9</td><td>Fresh Fish</td><td>Locally sourced or imported fresh fish</td><td>Meat &amp; Poultry</td><td>1</td></tr><tr class="even"><td class="sorting_1">10</td><td>Shellfish</td><td>Shrimp, crab, lobster, mussels</td><td>Meat &amp; Poultry</td><td>1</td></tr></tbody>
            </table><div class="dataTables_info" id="subcategoriestable_info" role="status" aria-live="polite">Showing 1 to 10 of 74 entries</div><div class="dataTables_paginate paging_simple_numbers" id="subcategoriestable_paginate"><a class="paginate_button previous disabled" aria-controls="subcategoriestable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="subcategoriestable_previous">Previous</a><span><a class="paginate_button current" aria-controls="subcategoriestable" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="subcategoriestable" role="link" data-dt-idx="1" tabindex="0">2</a><a class="paginate_button " aria-controls="subcategoriestable" role="link" data-dt-idx="2" tabindex="0">3</a><a class="paginate_button " aria-controls="subcategoriestable" role="link" data-dt-idx="3" tabindex="0">4</a><a class="paginate_button " aria-controls="subcategoriestable" role="link" data-dt-idx="4" tabindex="0">5</a><span class="ellipsis">…</span><a class="paginate_button " aria-controls="subcategoriestable" role="link" data-dt-idx="7" tabindex="0">8</a></span><a class="paginate_button next" aria-controls="subcategoriestable" role="link" data-dt-idx="next" tabindex="0" id="subcategoriestable_next">Next</a></div></div>
          </div>
        </div>
      </div>
    </div>



    <div class="tab-pane fade" id="brands" role="tabpanel" aria-labelledby="brands-tab">
      <div class="card customized-card">
        <div class="card-header">
        </div>
        <div class="card-body p-4">
          <div class="col-lg-12">
            <div id="toolbar" class="mb-4 pb-3">
              <a href="#" class="btn btn-primary btn-flat btn-sm add_brand me-2"><i class="fa fa-plus-circle me-2"></i>Add</a>
              <a href="#" class="btn btn-outline-success btn-flat btn-sm editbrand me-2"><i class="fa fa-edit me-2"></i>Edit</a>
              <a href="#" class="btn btn-outline-danger btn-flat btn-sm deletebrand me-2"><i class="fa fa-trash me-2"></i>Delete</a>
            </div>
          </div>
          <div class="table-responsive customized-table-container">
            <div id="brandstable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="brandstable_length"><label>Show <select name="brandstable_length" aria-controls="brandstable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="brandstable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="brandstable"></label></div><div id="brandstable_processing" class="dataTables_processing" role="status" style="display: none;"><div><div></div><div></div><div></div><div></div></div></div><table id="brandstable" class="table display nowrap table-stripped customized-table dataTable no-footer" width="100%" aria-describedby="brandstable_info" style="width: 100%;">  
              <thead>
                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="brandstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="No.: activate to sort column descending" aria-sort="ascending">No.</th><th class="sorting" tabindex="0" aria-controls="brandstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Brand Name: activate to sort column ascending">Brand Name</th></tr>
              </thead><tbody><tr class="odd"><td class="sorting_1">1</td><td>Coca-Cola</td></tr><tr class="even"><td class="sorting_1">2</td><td>Pepsi</td></tr><tr class="odd"><td class="sorting_1">3</td><td>Nestlé</td></tr><tr class="even"><td class="sorting_1">4</td><td>Unilever</td></tr><tr class="odd"><td class="sorting_1">5</td><td>Procter &amp; Gamble</td></tr><tr class="even"><td class="sorting_1">6</td><td>Kellogg's</td></tr><tr class="odd"><td class="sorting_1">7</td><td>Heinz</td></tr><tr class="even"><td class="sorting_1">8</td><td>Danone</td></tr><tr class="odd"><td class="sorting_1">9</td><td>Nivea</td></tr><tr class="even"><td class="sorting_1">10</td><td>Colgate</td></tr></tbody>
            </table><div class="dataTables_info" id="brandstable_info" role="status" aria-live="polite">Showing 1 to 10 of 56 entries</div><div class="dataTables_paginate paging_simple_numbers" id="brandstable_paginate"><a class="paginate_button previous disabled" aria-controls="brandstable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="brandstable_previous">Previous</a><span><a class="paginate_button current" aria-controls="brandstable" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="brandstable" role="link" data-dt-idx="1" tabindex="0">2</a><a class="paginate_button " aria-controls="brandstable" role="link" data-dt-idx="2" tabindex="0">3</a><a class="paginate_button " aria-controls="brandstable" role="link" data-dt-idx="3" tabindex="0">4</a><a class="paginate_button " aria-controls="brandstable" role="link" data-dt-idx="4" tabindex="0">5</a><a class="paginate_button " aria-controls="brandstable" role="link" data-dt-idx="5" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="brandstable" role="link" data-dt-idx="next" tabindex="0" id="brandstable_next">Next</a></div></div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="taxes" role="tabpanel" aria-labelledby="taxes-tab">
      <div class="card customized-card">
        <div class="card-header">
        </div>
        <div class="card-body p-4">
          <div class="col-lg-12">
            <div id="toolbar" class="mb-4 pb-3">
              <a href="#" class="btn btn-primary btn-flat btn-sm add_tax me-2"><i class="fa fa-plus-circle me-2"></i>Add</a>
              <a href="#" class="btn btn-outline-success btn-flat btn-sm edittax me-2"><i class="fa fa-edit me-2"></i>Edit</a>
              <a href="#" class="btn btn-outline-danger btn-flat btn-sm deletetax me-2"><i class="fa fa-trash me-2"></i>Delete</a>
            </div>
          </div>
          <div class="table-responsive customized-table-container">
            <div id="taxestable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="taxestable_length"><label>Show <select name="taxestable_length" aria-controls="taxestable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="taxestable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="taxestable"></label></div><div id="taxestable_processing" class="dataTables_processing" role="status" style="display: none;"><div><div></div><div></div><div></div><div></div></div></div><table id="taxestable" class="table display nowrap table-stripped customized-table dataTable no-footer" width="100%" aria-describedby="taxestable_info" style="width: 100%;">  
              <thead>
                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="taxestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="No.: activate to sort column descending" aria-sort="ascending">No.</th><th class="sorting" tabindex="0" aria-controls="taxestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="taxestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Rate: activate to sort column ascending">Rate</th><th class="sorting" tabindex="0" aria-controls="taxestable" rowspan="1" colspan="1" style="width: 0px;" aria-label="is_Default: activate to sort column ascending">is_Default</th></tr>
              </thead><tbody><tr class="odd"><td class="sorting_1">1</td><td>VAT</td><td>20.00</td><td>No</td></tr></tbody>
            </table><div class="dataTables_info" id="taxestable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div><div class="dataTables_paginate paging_simple_numbers" id="taxestable_paginate"><a class="paginate_button previous disabled" aria-controls="taxestable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="taxestable_previous">Previous</a><span><a class="paginate_button current" aria-controls="taxestable" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="taxestable" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" id="taxestable_next">Next</a></div></div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="units" role="tabpanel" aria-labelledby="units-tab">
      <div class="card customized-card">
        <div class="card-header">
        </div>
        <div class="card-body p-4">
          <div class="col-lg-12">
            <div id="toolbar" class="mb-4 pb-3">
              <a href="#" class="btn btn-primary btn-flat btn-sm add_unit me-2"><i class="fa fa-plus-circle me-2"></i>Add</a>
              <a href="#" class="btn btn-outline-success btn-flat btn-sm editunit me-2"><i class="fa fa-edit me-2"></i>Edit</a>
              <a href="#" class="btn btn-outline-danger btn-flat btn-sm deleteunit me-2"><i class="fa fa-trash me-2"></i>Delete</a>
            </div>
          </div>
          <div class="table-responsive customized-table-container">
            <div id="unitstable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="unitstable_length"><label>Show <select name="unitstable_length" aria-controls="unitstable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="unitstable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="unitstable"></label></div><div id="unitstable_processing" class="dataTables_processing" role="status" style="display: none;"><div><div></div><div></div><div></div><div></div></div></div><table id="unitstable" class="table display nowrap table-stripped customized-table dataTable no-footer" width="100%" aria-describedby="unitstable_info" style="width: 100%;">  
              <thead>
                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="unitstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="No.: activate to sort column descending" aria-sort="ascending">No.</th><th class="sorting" tabindex="0" aria-controls="unitstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Unit Name: activate to sort column ascending">Unit Name</th><th class="sorting" tabindex="0" aria-controls="unitstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Short Name: activate to sort column ascending">Short Name</th><th class="sorting" tabindex="0" aria-controls="unitstable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Description: activate to sort column ascending">Description</th></tr>
              </thead><tbody><tr class="odd"><td class="sorting_1">1</td><td>Piece</td><td>pc</td><td>Single item or unit</td></tr><tr class="even"><td class="sorting_1">2</td><td>Pack</td><td>pk</td><td>A pack of items bundled together</td></tr><tr class="odd"><td class="sorting_1">3</td><td>Box</td><td>bx</td><td>Boxed items</td></tr><tr class="even"><td class="sorting_1">4</td><td>Bottle</td><td>btl</td><td>Liquid items in bottles</td></tr><tr class="odd"><td class="sorting_1">5</td><td>Can</td><td>can</td><td>Preserved or packaged food in a can</td></tr><tr class="even"><td class="sorting_1">6</td><td>Carton</td><td>ctn</td><td>Carton packaging, often for milk or juice</td></tr><tr class="odd"><td class="sorting_1">7</td><td>Kilogram</td><td>kg</td><td>Metric unit of mass</td></tr><tr class="even"><td class="sorting_1">8</td><td>Gram</td><td>g</td><td>Small metric unit of mass</td></tr><tr class="odd"><td class="sorting_1">9</td><td>Litre</td><td>L</td><td>Metric unit of volume for liquids</td></tr><tr class="even"><td class="sorting_1">10</td><td>Millilitre</td><td>ml</td><td>Smaller unit of liquid measurement</td></tr></tbody>
            </table><div class="dataTables_info" id="unitstable_info" role="status" aria-live="polite">Showing 1 to 10 of 32 entries</div><div class="dataTables_paginate paging_simple_numbers" id="unitstable_paginate"><a class="paginate_button previous disabled" aria-controls="unitstable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="unitstable_previous">Previous</a><span><a class="paginate_button current" aria-controls="unitstable" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="unitstable" role="link" data-dt-idx="1" tabindex="0">2</a><a class="paginate_button " aria-controls="unitstable" role="link" data-dt-idx="2" tabindex="0">3</a><a class="paginate_button " aria-controls="unitstable" role="link" data-dt-idx="3" tabindex="0">4</a></span><a class="paginate_button next" aria-controls="unitstable" role="link" data-dt-idx="next" tabindex="0" id="unitstable_next">Next</a></div></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>