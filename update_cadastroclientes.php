<?php

$id = intval($_REQUEST['id']);
$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$telefone = $_REQUEST['telefone'];
$email = $_REQUEST['email'];

include 'conn.php';

$sql = "UPDATE cadastroclientes SET nome = :nome, sobrenome = :sobrenome, telefone = :telefone, email = :email WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $id, SQLITE3_INTEGER);
$stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
$stmt->bindValue(':sobrenome', $sobrenome, SQLITE3_TEXT);
$stmt->bindValue(':telefone', $telefone, SQLITE3_TEXT);
$stmt->bindValue(':email', $email, SQLITE3_TEXT);
$stmt->execute();

echo json_encode(array(
    'id' => $id,
    'nome' => $nome,
    'sobrenome' => $sobrenome,
    'telefone' => $telefone,
    'email' => $email
));

?>
