<?php
require_once __DIR__ . '/../models/product.php';
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Cloudinary\Cloudinary;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
      
        // 1. Sanitize form inputs
        $name = $_POST['name'];
        $price = floatval($_POST['price']);
        $category_id = intval($_POST['category_id']);
        $stock = intval($_POST['stock'] );
        $description = $_POST['description'];

        $is_featured = isset($_POST['is_featured']) ? 1 : 0;
        $is_summer_Sale = isset($_POST['is_summer_Sale']) ? 1 : 0;
        $is_new = isset($_POST['is_new']) ? 1 : 0;
        $is_hot_sale = isset($_POST['is_hot_sale']) ? 1 : 0;
        $previous_price = isset($_POST['previous_price']) && $_POST['previous_price']
            ? floatval($_POST['previous_price'])
            : null;

        if (isset($_POST['percentage_discount']) && $_POST['percentage_discount']) {
            $percentage_discount = floatval($_POST['percentage_discount']);
        } elseif ($previous_price !== null && $previous_price > 0 && $price < $previous_price) {
            $percentage_discount = round((($previous_price - $price) / $previous_price) * 100, 2);
        } else {
            $percentage_discount = 0;
        }

        $brand = $_POST['brand'];
        $rating = isset($_POST['rating']);
        $reviews = isset($_POST['reviews']);

        // =======================
        // 2. Upload image to Cloudinary
        // =======================

        if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
            if (isset($_FILES['image'])) {
                $cloudinary = new Cloudinary([
                    'cloud' => [
                        'cloud_name' => 'doxivkfxr',
                        'api_key' => '395543736744436',
                        'api_secret' => 'WIWXvqWCiGSD99B4dcbcw2igzAQ',
                    ],
                ]);

                $tmpFilePath = $_FILES['image']['tmp_name'];
                $uploadResult = $cloudinary->uploadApi()->upload($tmpFilePath, [
                    'folder' => 'products',
                    'public_id' => uniqid('product_'),
                    'overwrite' => true,
                ]);

                $imageUrl = $uploadResult['secure_url'];
            }
        }

        if (!$imageUrl) {
            throw new Exception("Image upload failed or no image provided.");
        }

        // =======================
        // 3. Create Product object
        // =======================
        $product = new Product(
            $pdo,
            $name,
            $price,
            $category_id,
            $stock,
            $description,
            $imageUrl,
            $is_featured,
            $is_summer_Sale,
            $is_new,
            $is_hot_sale,
            $previous_price,
            $percentage_discount,
            $brand,
            $rating,
            $reviews
        );

        // =======================
        // 4. Save to DB
        // =======================
        $result = $product->saveProduct();

        if (!$result['status']) {
            echo "Error saving product: " . htmlspecialchars($result['message']);
            exit;
        }
        header("Location: /e-s/views/dashboard.php");
        exit;


    } catch (Exception $e) {
        echo json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request method."
    ]);
}
