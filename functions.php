<?php 

$db = mysqli_connect("localhost", "root", "php123", "insta");

function tambah($data) {
    global $db;
    $user = $data["username"];
    $pass = $data["password"];

    $query = "INSERT INTO user (username, password)
				VALUES
                ('$user', '$pass')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}