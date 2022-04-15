<?php
session_start();
if (isset($_SESSION["product"])) {
    $datos = $_SESSION["product"];
    // unset($_SESSION["product"]);
    // header('Location: product_add.php');

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>
            Product list
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <h1 class="bg-primary text-white p-3">
                Product list
            </h1>
            <button class='btn btn-primary'>Add product </button>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>


                    <?php

                    foreach ($datos as $key => $dato) {

                    ?>
                        <tr>
                            <td>
                                <?php echo $dato["Name"]; ?>
                            </td>
                            <td><?php echo $dato["Price"]; ?></td>
                            <td><?php echo $dato["Description"]; ?></td>
                            <td>
                                <button class="btn btn-danger" onclick=<?php unset($datos[$key]) ?>>Delete</button>
                            </td>
                        </tr>




                    <?php

                    };

                    ?>


                </tbody>

            </table>
        </div>
        <!--
                Add the PHP code as well as the table
                that iterates all product in $_SESSION["product"]
                Every time a new product gets added via product_add.php, it should
                be display on this table.
                
                You should also implement the PHP logic to delete the selected product
                from $_SESSION["product"]. You could use something like:
                
                foreach ($product as $key => $product)
                
                in order to retrieve the key of the element that needs to be deleted.
                The "Delete" button should be inside of a POST form that sends the key
                of the element to be deleted.



                array_splice($_SESSION["product"], $key, 1);
                
            -->

    <?php
} else {
    echo "<h1>No hay productos que mostrar</h1>";
}
    ?>

    </body>

    </html>