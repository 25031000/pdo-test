<?php

require_once __DIR__ . "../../models/Database.php";
require_once __DIR__ . "../../models/Product.php";

$value = $_POST['id'] ?? null;

echo "DONE!";

if($value !== null){
    $id = intval($value);
    $obj = new Product();
    $obj->delete($id);
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo '<script src="sweetalert2.all.min.js"></script>';
    echo '<script>  
    Swal.fire(
        {
            title: "Eliminado",
            text: "Producto eliminado correctamente", 
            icon: "success", 
            confirmButtonText: "Cool"}).then((result) => {
                if (result.isConfirmed) {
                    location.href = "../index.php"
                  }
            }) 
    </script>';
}


?>