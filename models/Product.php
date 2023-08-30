<?php

class Product {
    private $name;
    private $price;


    public function add(string $name, string $price){
        try {
            $this->name = $name;
            $this->price = $price;
            
            $query = "INSERT INTO producto(nombre, precio) VALUES(:nombre, :precio)";
            $db = new Database();
            $statement = $db->connect()->prepare($query);

            $statement->bindParam(':nombre', $this->name, PDO::PARAM_STR);
            $statement->bindParam(':precio', $this->price, PDO::PARAM_STR);

            $statement->execute();
        } catch (\Throwable $th) {
            echo "Error to add product: " . $th;
        }
    }

    public function getAll(){
        try {
            $query = "SELECT * FROM producto";

            $db = new Database();
            $statement = $db->connect()->prepare($query);

            $statement->execute();

            $arr = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($arr as $row) {
                echo '<form method="post" action="controllers/product-delete.php" class="m-2 row">';
                echo '<input placeholder="id" class="input-id" name="id" value=' . $row['id'] . '>' . $row['id'] . '</input>';
                echo '<p class="px-4">Nombre: ' . $row['nombre'] . '</p>';
                echo '<p class="px-4">Precio: ' . $row['precio'] . '</p>';
                echo '<button type="submit" class="btn btn-danger w-50">Eliminar</button>';

                echo '</form>';
                echo '<br>';
            }
        } catch (\Throwable $th) {
            echo "Error to charge all products: " . $th;
            
        }
    }

    public function delete(int $id){
        try {
            $query = "DELETE FROM producto WHERE id = :id";
            $db = new Database();
            $statement = $db->connect()->prepare($query);

            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();

        } catch (\Throwable $th) {
            echo "Somethin went wrong " . $th;
        }
    }

    public function update(string $nombre, string $precio, int $id){
        try {
            $query = "UPDATE producto SET nombre = :nombre, precio = :precio WHERE id = :id";
            $db = new Database();
            $statement = $db->connect()->prepare($query);

            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':precio', $precio, PDO::PARAM_STR);
            $statement->bindParam(':id', $id, PDO::PARAM_STR);

            $statement->execute();
        } catch (\Throwable $th) {
            echo "Somethin went wrong " . $th;

        }
    }
}

?>