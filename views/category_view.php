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



<form action="/e-s/controllers/add_category_controller.php" method="POST" enctype="multipart/form-data" class="container mt-4 form-group form-control fullscreen">
<div row>
<h3 class="mb-4">Add New Category</h3>
</div> 
  <div class="mb-3">
    <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="name" name="name" required />
  </div>

  <div class="mb-3">
    <label for="image" class="form-label">Product Image</label>
    <input class="form-control" type="file" id="image" name="image" accept="image/*" />
  </div>
</div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

<script>
  const categorySelect = document.getElementById('category_id');
  const newCategoryInput = document.getElementById('new_category');

  const subcategorySelect = document.getElementById('subcategory_id');
  const newSubcategoryInput = document.getElementById('new_subcategory');

  categorySelect.addEventListener('change', () => {
    if (categorySelect.value === 'new') {
      newCategoryInput.classList.remove('d-none');
      newCategoryInput.required = true;
    } else {
      newCategoryInput.classList.add('d-none');
      newCategoryInput.required = false;
    }
  });

  subcategorySelect.addEventListener('change', () => {
    if (subcategorySelect.value === 'new') {
      newSubcategoryInput.classList.remove('d-none');
      newSubcategoryInput.required = true;
    } else {
      newSubcategoryInput.classList.add('d-none');
      newSubcategoryInput.required = false;
    }
  });
</script>
