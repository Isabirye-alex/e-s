<?php 
require_once __DIR__ . '/../config/db.php';

class Subcategories{
    public $id;
    public $name;
    public $category_id;
    public $imageUrl;
    private $pdo;

    public function __construct($pdo, $name, $category_id,$imageUrl, $id=null){
        $this->pdo = $pdo;
        $this->name = $name;
        $this->category_id = $category_id;
        $this->imageUrl = $imageUrl;
        $this->id= $id;
    }

    public function fetchSubCategories(){
        $sql = 'SELECT * FROM subcategories';
        $stmt = $this->pdo->query($sql);
        $subcategories = [];

        while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
            $subcategories[] = new Subcategories(
                pdo: $this->pdo,
                name:$data['name'],
                category_id: $data['category_id'],
                imageUrl: $data['imageUrl'],
                id:$data['id']
            
            );
        }
        return $subcategories;
    }
}