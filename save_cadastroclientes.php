<?php

$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$telefone = $_REQUEST['telefone'];
$email = $_REQUEST['email'];

include 'conn.php';

$sql = "INSERT INTO cadastroclientes (nome, sobrenome, telefone, email) VALUES (:nome, :sobrenome, :telefone, :email)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
$stmt->bindValue(':sobrenome', $sobrenome, SQLITE3_TEXT);
$stmt->bindValue(':telefone', $telefone, SQLITE3_TEXT);
$stmt->bindValue(':email', $email, SQLITE3_TEXT);
$stmt->execute();

echo json_encode(array(
    'id' => $conn->lastInsertRowID(),
    'nome' => $nome,
    'sobrenome' => $sobrenome,
    'telefone' => $telefone,
    'email' => $email
));

?>