<?php
require_once __DIR__ . '/db/config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM students WHERE id = :id");
$stmt->execute([':id' => $id]);

header("Location: index.php");
exit();
