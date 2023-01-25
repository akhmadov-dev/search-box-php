<?php

function getUserAll(PDO $conn)
{
    $sql = 'SELECT * FROM users';
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUser(PDO $conn, string $search)
{
    $sql = "SELECT * FROM users WHERE first_name LIKE '%$search%'
    OR last_name LIKE '%$search%'
    OR middle_name LIKE '%$search%'
    OR address LIKE '%$search%'
    OR birth_date LIKE '%$search%'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
