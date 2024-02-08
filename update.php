<?php
include 'db.php';
$id = $_POST['id'];
$name = $_POST['name'];
$score = $_POST['score'];

try {
    $conn->stmt_init();
    $stmt = $conn->prepare('UPDATE users SET name = ?, score = ? WHERE id = ?');
    $stmt->bind_param('sii', $name, $score, $id);
    $stmt->execute();

    if ($stmt->affected_rows == 0)
        exit('Error al actualizar el usuario');

    $stmt->close();
    header("location: index.php");
} catch (Exception $e) {
    echo $e->getMessage();
}