<?php

include 'conn.php';

$sql = 'SELECT * FROM cadastroclientes';
$result = array();
$rs = $conn->query($sql);

while ($row = $rs->fetchArray(SQLITE3_ASSOC)) {
    array_push($result, $row);
}

echo json_encode($result);

?>