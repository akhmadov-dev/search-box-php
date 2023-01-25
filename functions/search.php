<?php

function getUserAll(PDO $conn)
{
    $sql = 'SELECT * FROM users';
    $stmt = $conn->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserOne(PDO $conn, string $id)
{
    $sql = 'SELECT * FROM users WHERE id = :id';

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function getUser(PDO $conn, string $search)
{
    $sql = "SELECT * FROM users WHERE first_name LIKE :search
    OR last_name LIKE :search
    OR middle_name LIKE :search
    OR address LIKE :search
    OR birth_date LIKE :search";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':search', $search, PDO::PARAM_STR);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
