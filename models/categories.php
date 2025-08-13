<?php 

require_once __DIR__ . '/../config/db.php';

class Categories {
    public $id;
    public $name;
    public $imageUrl;
    public $message;
    private $pdo;

    public function __construct($pdo, $name, $imageUrl, $id = null){
        $this->pdo = $pdo;
        $this->id = $id;
        $this->name = $name;
        $this->imageUrl = $imageUrl;
    }

    public function saveCategory() {
        $requiredFields = ['name', 'imageUrl'];
        foreach($requiredFields as $field) {
            if (empty($this->$field) && $this->$field !== 0) {
                return [
                    'status' => false,
                    'id' => null,
                    'message' => "The field '{$field}' is required."
                ];
            }
        }
    
        $fields = [
            'name' => $this->name,
            'imageUrl' => $this->imageUrl
        ];
    
        $columns = implode(',', array_keys($fields));
        $placeholders = ':' . implode(', :', array_keys($fields)); // no spaces here
        $sql = "INSERT INTO categories($columns) VALUES($placeholders)";
    
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($fields);
            $this->id = $this->pdo->lastInsertId();
    
            return [
                'status' => true,
                'id' => $this->id,
                'message' => 'Category saved successfully.'
            ];
        } catch(PDOException $e) {
            return [
                'status' => false,
                'id' => null,
                'message' => 'An unexpected error occurred while saving the category.'
            ];
        }
    }
    
    public function fetchCategories(){
        $sql = 'SELECT * FROM categories';
        $stmt = $this->pdo->query($sql);
        $categories = [];

        while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
            $categories[] = new Categories(
                $this->pdo,
                $data['name'],
                $data['imageUrl'] ?? null,
                $data['id']
            );
        }
        return $categories;
    }
}
