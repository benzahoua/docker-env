<?php
$dbHost = 'mysql';
$dbName = 'mydatabase';
$dbUser = 'root';
$dbPassword = 'secret';

try {
    $pdo = new PDO(
        "mysql:dbname={$dbName};host={$dbHost}",
        $dbUser,
        $dbPassword,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $query = $pdo->query('SHOW VARIABLES like "version"');
    $row = $query->fetch();
    echo 'MySQL version:' . $row['Value'];
} catch (PDOException $e) {
    echo $e->getMessage();
}
