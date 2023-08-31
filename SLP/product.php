<?php

include('db.php');

$product_id = $_POST['product_id'];
$cost_price = $_POST['cost_price'];
$supplier_id = $_POST['supplier_id'];
$quantity = $_POST['quantity'];
$p_name = $_POST['p_name'];
$p_type = $_POST['p_type'];
$market_price = $_POST['market_price'];
$supp_id = $_POST['supp_id'];

$sql = "INSERT INTO product (product_id, cost_price, supplier_id, quantity, p_name, p_type, market_price, supp_id) VALUES ('$product_id', '$cost_price', '$supplier_id', '$quantity', '$p_name', '$p_type', '$market_price', '$supp_id')";

if($conn->query($sql)){
    echo "Data inserted successfully";
} else {
    echo "Something wrong";
}
?>