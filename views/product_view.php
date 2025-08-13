<?php 
 require_once __DIR__ . '/../config/db.php'; 
 require_once __DIR__ . '/../models/categories.php';
 require_once __DIR__ . '/../models/subcategories.php';
 require_once __DIR__ . '/../models/product.php';
$categoryModel = new Categories($pdo, '', '');
$categories = $categoryModel->fetchCategories();
$subcategoryModel = new Subcategories($pdo, '','','');
$subcategories = $subcategoryModel->fetchSubCategories();

?>



<form action="/x/controllers/add_product_controller.php" method="POST" enctype="multipart/form-data" class="container mt-4 form-group form-control fullscreen">
<div row>
<h3 class="mb-4">Add New Product</h3>
</div> 
  <div class="mb-3">
    <label for="name" class="form-label">Product Name <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="name" name="name" required />
  </div>

  <div class="mb-3 row">
    <div class="col">
      <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
      <input type="number" step="0.01" class="form-control" id="price" name="price" required />
    </div>
    <div class="col">
      <label for="previous_price" class="form-label">Previous Price</label>
      <input type="number" step="0.01" class="form-control" id="previous_price" name="previous_price" />
    </div>
  </div>

  <div class="mb-3 row">
    <div class="col">
      <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
      <select class="form-select" id="category_id" name="category_id" required>
        <option value="" selected disabled>Select category</option>
        <?php foreach($categories as $cat): ?>
          <option value="<?= htmlspecialchars($cat->id) ?>"><?= htmlspecialchars($cat->name) ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>



  <div class="row mb-3">
  <div class="col-md-6">
    <label for="brand" class="form-label">Brand</label>
    <input type="text" class="form-control" id="brand" name="brand" />
  </div>

  <div class="col-md-6">
    <label for="stock" class="form-label">Stock <span class="text-danger">*</span></label>
    <input type="number" class="form-control" id="stock" name="stock" required />
  </div>
</div>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
  </div>

  <div class="mb-3">
    <label for="image" class="form-label">Product Image</label>
    <input class="form-control" type="file" id="image" name="image" accept="image/*" />
  </div>

  <div class="d-flex gap-3 flex-wrap mb-3">
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured" />
    <label class="form-check-label" for="is_featured">Featured</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="is_summer_Sale" name="is_summer_Sale" />
    <label class="form-check-label" for="is_summer_Sale">Summer Sale</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="is_new" name="is_new" />
    <label class="form-check-label" for="is_new">New</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="is_hot_sale" name="is_hot_sale" />
    <label class="form-check-label" for="is_hot_sale">Hot Sale</label>
  </div>
</div>
  <button type="submit" class="btn btn-primary">Add Product</button>
</form>

<script>
  const categorySelect = document.getElementById('category_id');
  const newCategoryInput = document.getElementById('new_category');

  categorySelect.addEventListener('change', () => {
    if (categorySelect.value === 'new') {
      newCategoryInput.classList.remove('d-none');
      newCategoryInput.required = true;
    } else {
      newCategoryInput.classList.add('d-none');
      newCategoryInput.required = false;
    }
  });
</script>
