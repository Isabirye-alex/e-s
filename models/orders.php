<?php
require_once __DIR__ . '/../config/db.php';

class Orders
{
    public $id;
    public $total_amount;
    public $shipping_address;
    public $payment_method;
    public $customer_first_name;
    public $customer_last_name;
    public $is_paid_at;
    public $is_delivered_at;

    public $status;
    private $pdo;

    public function __construct($pdo, $total_amount, $shipping_address, $payment_method, $customer_name, $customer_last_name, $is_delivered_at, $is_paid_at, $status, $id = null)
    {
        $this->pdo = $pdo;
        $this->id = $id;
        $this->total_amount = $total_amount;
        $this->shipping_address = $shipping_address;
        $this->payment_method = $payment_method;
        $this->customer_first_name = $customer_name;
        $this->customer_last_name = $customer_last_name;
        $this->is_delivered_at = $is_delivered_at;
        $this->is_paid_at = $is_paid_at;
        $this->status = $status;
    }

    public static function getAllOrders($pdo)
    {
        $sql = "SELECT o.*, u.firstName AS customer_first_name, u.lastName as customer_last_name 
                FROM orders o
                LEFT JOIN users u ON o.user_id = u.id
                ORDER BY o.id DESC";

        try {
            $stmt = $pdo->query($sql);
            if (!$stmt) {
                print_r($pdo->errorInfo()); // <--- debug
                return [];
            }

            $orders = [];
            while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $orders[] = new Orders(
                    $pdo,
                    $data['total_amount'],
                    $data['shipping_address'],
                    $data['payment_method'],
                    $data['customer_first_name'] ?? 'Walk-in Customer',
                    $data['customer_last_name'] ?? '',
                    $data['delivered_at'],
                    $data['paid_at'],
                    $data['status'],
                    $data['id']
                );
            }
            return $orders;
        } catch (PDOException $e) {
            echo "Error fetching orders: " . $e->getMessage();
            return [];
        }
    }

    public static function getOrderById($pdo, $id, )
    {
        $sql = "SELECT o.*, 
                       u.firstName AS customer_first_name, 
                       u.lastName AS customer_last_name 
                FROM orders o
                LEFT JOIN users u ON o.user_id = u.id
                WHERE o.id = :id
                LIMIT 1";

        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$data) {
                return null;
            }

            return new Orders(
                $pdo,
                $data['total_amount'],
                $data['shipping_address'],
                $data['payment_method'],
                $data['customer_first_name'] ?? 'Walk-in Customer',
                $data['customer_last_name'] ?? '',
                $data['delivered_at'],
                $data['paid_at'],
                $data['status'],
                $data['id']
            );
        } catch (PDOException $e) {
            echo "Error fetching order: " . $e->getMessage();
            return null;
        }
    }


}
