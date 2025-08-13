<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../models/orders.php';

if (!isset($_GET['action'], $_GET['id'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

$action = $_GET['action'];
$orderId = intval($_GET['id']);

$order = Orders::getOrderById($pdo, $orderId);
if (!$order) {
    echo json_encode(['success' => false, 'message' => 'Order not found']);
    exit;
}

switch ($action) {
    case 'confirm': $newStatus = 'processing'; break;
    case 'cancel': $newStatus = 'cancelled'; break;
    case 'pending': $newStatus = 'pending'; break;
    case 'shipped': $newStatus = 'shipped'; break;
    default:
        echo json_encode(['success' => false, 'message' => 'Invalid action']);
        exit;
}

try {
    $stmt = $pdo->prepare("UPDATE orders SET status = :status, updated_at = NOW() WHERE id = :id");
    $stmt->bindValue(':status', $newStatus);
    $stmt->bindValue(':id', $orderId, PDO::PARAM_INT);
    $stmt->execute();

    echo json_encode(['success' => true, 'newStatus' => $newStatus]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
