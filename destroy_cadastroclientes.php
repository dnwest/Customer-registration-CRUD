<?php

$id = intval($_REQUEST['id']);

include 'conn.php';

$sql = "DELETE FROM cadastroclientes WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $id, SQLITE3_INTEGER);
$stmt->execute();

echo json_encode(array('success' => true));

?>