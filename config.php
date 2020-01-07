<?php 

try {
    // Load the .env
    $dotenv = Dotenv\Dotenv::create(__DIR__);
    $dotenv->load();
    
    $environment = getenv('APP_ENV');
    
    $dbConnection = getenv('DB_CONNECTION');
    $dbHost = getenv('DB_HOST');
    $dbPort = getenv('DB_PORT');
    $dbDatabase = getenv('DB_DATABASE');
    $dbUsername = getenv('DB_USERNAME');
    $dbPassword = getenv('DB_PASSWORD');
    
    $con = new PDO(
        "{$dbConnection}:host={$dbHost};port={$dbPort};dbname={$dbDatabase}",
        "{$dbUsername}",
        "{$dbPassword}"
    );
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo $ex->getMessage();
    exit(0);
}
