<?php

require_once  __DIR__ . "../../models/Database.php";
require_once  __DIR__ . "../../models/Product.php";

//Get data
$productName = $_POST['name'] ?? null;
$productPrice = $_POST['price'] ?? null;

echo 'DONE!';
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
echo '<script src="sweetalert2.all.min.js"></script>';

if ($productName !== '' && $productPrice !== '') {
    $newProduct = new Product();
    $newProduct->add($productName, $productPrice);
    
    echo '<script>  
    Swal.fire(
        {
            title: "Creado",
            text: "Producto creado correctamente", 
            icon: "success", 
            confirmButtonText: "Cool"}).then((result) => {
                if (result.isConfirmed) {
                    location.href = "../index.php"
                  }
            }) 
    </script>';
}else{
    echo '<script>  
    Swal.fire(
        {
            title: "Error!",
            text: "Debes ingresar los valores solicitados", 
            icon: "error", 
            confirmButtonText: "OK"}).then((result) => {
                if (result.isConfirmed) {
                    location.href = "../index.php"
                  }
            }) 
    </script>';
}




?>