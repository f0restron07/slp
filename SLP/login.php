<?php

include('db.php');

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$admin = $_POST['admin'];

$sql = "INSERT INTO login (id, username, password, Admin) VALUES ('$id', '$username', '$password', '$admin')";

if($conn->query($sql)){
    echo "Data inserted successfully";
} else {
    echo "Something wrong";
}
?>