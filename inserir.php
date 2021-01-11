<?php
    header('Content-Type: application/json');

    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $pdo = new PDO('mysql:host=localhost; dbname=base_teste;', 'root', '');

    $stmt = $pdo->prepare('INSERT INTO comentario (nome, comentario) VALUES (:na, :co)');
    $stmt->bindValue(':na', $name);
    $stmt->bindValue(':co', $comment);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Comentário Salvo com Sucesso');
    } else {
        echo json_encode('Falha ao salvar comentário');
    }