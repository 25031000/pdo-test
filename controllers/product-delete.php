<?php

require_once __DIR__ . "../../models/Database.php";
require_once __DIR__ . "../../models/Product.php";

$value = $_POST['id'] ?? null;

if($value !== null){
    $id = intval($value);
    $obj = new Product();
    $obj->delete($id);
    echo '<script>alert("Producto eliminado correctamente")</script>';
    echo '<script>location.href="../index.php"</script>';
}


?>