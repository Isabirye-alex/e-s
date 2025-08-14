<?php
require_once __DIR__ . '/../models/categories.php';
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Cloudinary\Cloudinary;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $name = $_POST['name'] ?? '';

        // Upload image to Cloudinary
        $imageUrl = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $cloudinary = new Cloudinary([
                'cloud' => [
                    'cloud_name' => 'doxivkfxr',
                    'api_key'    => '395543736744436',
                    'api_secret' => 'WIWXvqWCiGSD99B4dcbcw2igzAQ',
                ],
            ]);

            $tmpFilePath = $_FILES['image']['tmp_name'];
            $uploadResult = $cloudinary->uploadApi()->upload($tmpFilePath, [
                'folder'    => 'categories',
                'public_id' => uniqid('category_'),
                'overwrite' => true,
            ]);

            $imageUrl = $uploadResult['secure_url'];
        }

        if (!$imageUrl) {
            throw new Exception("Image upload failed or no image provided.");
        }

        // Instantiate category model
        $category = new Categories(
            $pdo,
            $name,
            $imageUrl  // removed trailing comma here
        );

        // Save category, expecting this method to return inserted category ID
        $categoryId = $category->saveCategory();

        header("Location: /e-s/views/dashboard.php");
        exit;

    } catch (Exception $e) {
        echo json_encode([
            "status"  => "error",
            "message" => $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        "status"  => "error",
        "message" => "Invalid request method."
    ]);
}
