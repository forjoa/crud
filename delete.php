<?php
include 'db.php';
$id = $_GET['id'];

try {
    $conn->stmt_init();
    $stmt = $conn->prepare('DELETE FROM users WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();

    if ($stmt->affected_rows == 0)
        exit('Error al eliminar el usuario');

    $stmt->close();
    header("location: index.php");
} catch (Exception $e) {
    echo $e->getMessage();
}