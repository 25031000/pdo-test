<?php

require_once __DIR__ . "../../models/Database.php";
require_once __DIR__ . "../../models/Product.php";

$value_id = $_POST['id'] ?? null;
$name = $_POST['name'] ?? null;
$price = $_POST['price'] ?? null;

echo 'DONE!';
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
echo '<script src="sweetalert2.all.min.js"></script>';

if($value_id !== '' && $name !== '' && $price !== ''){
    $id = intval($value_id);
    $obj = new Product();
    $obj->update($name, $price, $id);
    echo '<script>  
    Swal.fire(
        {
            title: "Creado",
            text: "Producto creado correctamente", 
            icon: "success", 
            confirmButtonText: "Cool"})
    </script>';
}else {
    echo '<script>  
    Swal.fire(
        {
            title: "Error!",
            text: "Debes ingresar los valores solicitados", 
            icon: "error", 
            confirmButtonText: "OK"})
    </script>';
}

?>