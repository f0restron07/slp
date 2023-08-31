<?php

include('db.php');

$manager_id = $_POST['manager_id'];
$dept_id = $_POST['dept_id'];
$dept_name = $_POST['dept_name'];

$sql = "INSERT INTO department (manager_id, dept_id, dept_name) VALUES ('$manager_id', '$dept_id', '$dept_name')";

if($conn->query($sql)){
    echo "Data inserted successfully";
} else {
    echo "Something wrong";
}

?>