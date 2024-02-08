<?php
include 'db.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    if (isset($_GET['id']) && $row['id'] == $_GET['id']) {
        echo '<form action="update.php" method="POST">';
        echo '<td><input type="text" name="name" value="' . $row['name'] . '"></td>';
        echo '<td><input type="number" name="score" value="' . $row['score'] . '"></td>';
        echo '<td><input type="submit" value="Save"></td>';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '</form>';
    } else {
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['score'] . "</td>";
        echo '<td><a href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
    }
    echo '<td><a href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
}
$conn->close();