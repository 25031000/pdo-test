<?php

require_once  __DIR__ . "../../models/Database.php";
require_once  __DIR__ . "../../models/Product.php";

//Get data
$productName = $_POST['name'] ?? null;
$productPrice = $_POST['price'] ?? null;

if ($productName !== null && $productPrice !== null) {
    $newProduct = new Product();
    $newProduct->add($productName, $productPrice);
    echo '<script>alert("Producto registrado correctamente")</script>';
    echo '<script>location.href="../index.php"</script>';
}




?>