<?php
include 'db.php';
$name = $_POST["name"];
$score = $_POST["score"];

try {
    $conn->stmt_init();
    $stmt = $conn->prepare('INSERT INTO users (name, score) VALUES (?, ?)');
    $stmt->bind_param('si', $name, $score);
    $stmt->execute();

    if ($stmt->affected_rows == 0)
        exit('Error al insertar el usuario');

    $stmt->close();
    header("location: index.php");
} catch (Exception $e) {
    echo $e->getMessage();
}