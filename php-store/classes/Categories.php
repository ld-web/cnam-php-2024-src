<?php

require_once 'Database.php';

class Categories
{
    public function findAll(): array
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM category");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}