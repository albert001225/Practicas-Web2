<?php
session_start();
$product = array();
if (isset($_SESSION["product"])) { // verificamos si existe la variable products
    $product = $_SESSION["product"];
}
array_push(
    $product,
    array(
        "Name" => isset($_POST["Name"]) ? $_POST["Name"] : "Error:Name",
        "Price" => isset($_POST["Price"]) ? $_POST["Price"] : "Error:Price",
        "Description" => isset($_POST["Description"]) ? $_POST["Description"] : "Error:Description"
    )
);
$_SESSION["product"] = $product;

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Product add
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="bg-primary text-white p-3">
            Product add
        </h1>
        <form action="product_add.php" method="POST">

            <div>Name :
                <input class="form-control" name="Name" required />
            </div>
            <div>
                Price :
                <input class="form-control" type="number" name="Price" required />
            </div>
            <div>
                Description:
                <input class="form-control" name="Description" required />
            </div>
            <div>
                <button class='btn btn-primary' type="submit" onclick="cambio()">Submit</button>

            </div>
        </form>
    </div>


</body>

</html>