<?php

require_once __DIR__ . "../../models/Database.php";
require_once __DIR__ . "../../models/Product.php";

$value_id = $_POST['id'] ?? null;
$name = $_POST['name'] ?? null;
$price = $_POST['price'] ?? null;

echo $value_id;
echo $name;
echo $price;

if($value_id !== null && $name !== null && $price !== null){
    $id = intval($value_id);
    $obj = new Product();
    $obj->update($name, $price, $id);
    echo '<script>alert("Producto actualizado correctamente")</script>';
    echo '<script>location.href="../index.php"</script>';
}


?>