<?php
require_once __DIR__. '/../config/db.php';
class Product {
    public $id; // for updates and retrieval
    public $name;
    public $price;
    public $category_id;
    public $stock;
    public $description;
    public $imageUrl;
    public $is_featured;
    public $is_summer_sale;
    public $is_new;
    public $is_hot_sale;
    public $previous_price;
    public $percentage_discount;
    public $brand;
    public $rating;
    public $reviews;
    public $message;
    private $pdo;

    public function __construct($pdo, $name, $price, $category_id, $stock, $description, $imageUrl, $is_featured = false, $is_summer_sale = false, $is_new = false, $is_hot_sale = false, $previous_price = null, $percentage_discount = null, $brand = null, $rating = null, $reviews = null, $id = null) {
        $this->pdo = $pdo;
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category_id = $category_id;
        $this->stock = $stock;
        $this->description = $description;
        $this->imageUrl = $imageUrl;
        $this->is_featured = $is_featured;
        $this->is_summer_sale = $is_summer_sale;
        $this->is_new = $is_new;
        $this->is_hot_sale = $is_hot_sale;
        $this->previous_price = $previous_price;
        $this->percentage_discount = $percentage_discount;
        $this->brand = $brand;
        $this->rating = $rating;
        $this->reviews = $reviews;
    }

    // Save new product to DB
    public function saveProduct() {
        // Step 1: Required fields validation
        $requiredFields = ['name', 'price', 'category_id', 'stock', 'description'];
        foreach ($requiredFields as $field) {
            if (empty($this->$field) && $this->$field !== 0) {
                return [
                    'status'  => false,
                    'id'      => null,
                    'message' => "The field '{$field}' is required."
                ];
            }
        }
    
        // Step 2: Type and range validation
        if (!is_numeric($this->price) || $this->price <= 0) {
            return [
                'status'  => false,
                'id'      => null,
                'message' => "Price must be a positive number."
            ];
        }
    
        if (!is_numeric($this->stock) || $this->stock < 0) {
            return [
                'status'  => false,
                'id'      => null,
                'message' => "Stock must be a non-negative number."
            ];
        }
    
        if (!is_numeric($this->category_id) || $this->category_id <= 0) {
            return [
                'status'  => false,
                'id'      => null,
                'message' => "Please select a valid category."
            ];
        }
        
        if (!is_string($this->name) || strlen(trim($this->name)) < 3) {
            return [
                'status'  => false,
                'id'      => null,
                'message' => "Product name must be at least 3 characters long."
            ];
        }
    
        if (!is_string($this->description) || strlen(trim($this->description)) < 10) {
            return [
                'status'  => false,
                'id'      => null,
                'message' => "Description must be at least 10 characters long."
            ];
        }
    
        // Step 3: Prepare data for insertion
        $fields = [
            'name'                => $this->name,
            'price'               => $this->price,
            'category_id'         => $this->category_id,
            'stock'               => $this->stock,
            'description'         => $this->description,
            'imageUrl'            => $this->imageUrl,
            'is_featured'         => (int)$this->is_featured,
            'is_summer_sale'      => (int)$this->is_summer_sale,
            'is_new'              => (int)$this->is_new,
            'is_hot_sale'         => (int)$this->is_hot_sale,
            'previous_price'      => $this->previous_price,
            'percentage_discount' => $this->percentage_discount,
            'brand'               => $this->brand,
            'rating'              => $this->rating,
            'reviews'             => $this->reviews
        ];
    
        $columns      = implode(',', array_keys($fields));
        $placeholders = ':' . implode(', :', array_keys($fields));
        $sql          = "INSERT INTO products ($columns) VALUES ($placeholders)";
    
        // Step 4: Try inserting into database
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($fields);
            $this->id = $this->pdo->lastInsertId();
        
            $this->message = "Product '{$this->name}' has been successfully added with ID {$this->id}.";
        
            return [
                'status'  => true,
                'id'      => $this->id,
                'message' => $this->message
            ];
        } catch (PDOException $e) {
        
            // Capture the real error message from PDO exception
            $this->message = "Database error: " . $e->getMessage();
        
            return [
                'status'  => false,
                'id'      => null,
                'message' => $this->message
            ];
        }
        
    }
    
    public function getMessage() {
        return $this->message ?? '';
    }
    
    // Update existing product (by id)
    public function updateProduct() {
        if (!$this->id) {
            throw new Exception("Product ID required for update.");
        }
        $sql = "UPDATE products SET
            name = :name,
            price = :price,
            category_id = :category_id,
            stock = :stock,
            description = :description,
            imageUrl = :imageUrl,
            is_featured = :is_featured,
            is_summer_sale = :is_summer_sale,
            is_new = :is_new,
            is_hot_sale = :is_hot_sale,
            previous_price = :previous_price,
            percentage_discount = :percentage_discount,
            brand = :brand,
            rating = :rating,
            reviews = :reviews
            WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $this->id,
            ':name' => $this->name,
            ':price' => $this->price,
            ':category_id' => $this->category_id,
            ':stock' => $this->stock,
            ':description' => $this->description,
            ':imageUrl' => $this->imageUrl,
            ':is_featured' => $this->is_featured,
            ':is_summer_sale' => $this->is_summer_sale,
            ':is_new' => $this->is_new,
            ':is_hot_sale' => $this->is_hot_sale,
            ':previous_price' => $this->previous_price,
            ':percentage_discount' => $this->percentage_discount,
            ':brand' => $this->brand,
            ':rating' => $this->rating,
            ':reviews' => $this->reviews
        ]);
    }

    // Retrieve product by id (static method)
    public static function getProductById($pdo, $id) {
        $sql = "SELECT * FROM products WHERE id = :id ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            return new Product(
                $pdo,
                $data['name'],
                $data['price'],
                $data['category_id'],
                $data['stock'],
                $data['description'],
                $data['imageUrl'],
                $data['is_featured'],
                $data['is_summer_sale'],
                $data['is_new'],
                $data['is_hot_sale'],
                $data['previous_price'],
                $data['percentage_discount'],
                $data['brand'],
                $data['rating'],
                $data['reviews'],
                $data['id']
            );
        }
        return null; // not found
    }

    // Retrieve all products (static method)
    public static function getAllProducts($pdo) {
        $sql = "SELECT * FROM products ORDER BY id DESC";
        $stmt = $pdo->query($sql);
        $products = [];
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $products[] = new Product(
                $pdo,
                $data['name'],
                $data['price'],
                $data['category_id'],
                $data['stock'],
                $data['description'],
                $data['imageUrl'],
                $data['is_featured'],
                $data['is_summer_sale'],
                $data['is_new'],
                $data['is_hot_sale'],
                $data['previous_price'],
                $data['percentage_discount'],
                $data['brand'],
                $data['rating'],
                $data['reviews'],
                $data['id']
            );
        }
        return $products;
    }

    public function deleteProduct() {
        if (!$this->id) {
            throw new Exception("Product ID required for deletion.");
        }
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $this->id]);
    }

    // Search products by name or category (static method)
    public static function searchProducts($pdo, $term) {
        $sql = "SELECT * FROM products WHERE name LIKE :term OR category LIKE :term";
        $stmt = $pdo->prepare($sql);
        $likeTerm = "%$term%";
        $stmt->execute([':term' => $likeTerm]);
        $results = [];
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = new Product(
                $pdo,
                $data['name'],
                $data['price'],
                $data['category'],
                $data['stock'],
                $data['description'],
                $data['imageUrl'],
                $data['is_featured'],
                $data['is_summer_sale'],
                $data['is_new'],
                $data['is_hot_sale'],
                $data['subcategory_id'],
                $data['previous_price'],
                $data['percentage_discount'],
                $data['brand'],
                $data['rating'],
                $data['reviews'],
                          
            );
        }
        return $results;
    }
}

