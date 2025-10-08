<?php
declare(strict_types=1);

header('Content-Type: application/json');

try {
    // Check if config file exists
    if (!file_exists(__DIR__ . '/config.php')) {
        throw new Exception('Configuration file missing');
    }
    
    require_once __DIR__ . '/config.php';
    
    // Check database connection
    require_once __DIR__ . '/Model/Database.php';
    $db = Database::getInstance()->connect();
    
    // Test a simple query
    $stmt = $db->query("SELECT 1 as test");
    $result = $stmt->fetch();
    
    if (!$result || $result['test'] !== 1) {
        throw new Exception('Database query test failed');
    }
    
    echo json_encode([
        'status' => 'healthy',
        'database' => 'connected',
        'timestamp' => date('Y-m-d H:i:s'),
        'environment' => ENVIRONMENT,
        'db_host' => DB_HOST,
        'db_name' => DB_NAME
    ]);
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'unhealthy',
        'error' => $e->getMessage(),
        'timestamp' => date('Y-m-d H:i:s')
    ]);
}
