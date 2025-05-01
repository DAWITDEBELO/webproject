<?php
include 'connect.php';
if (isset($_POST['add_product'])) {
    $Product_name = $_POST['Product_name'];
    $Product_price = $_POST['Product_price'];
    $Product_image = $_FILES['Product_image']['name'];
    $Product_image_temp_name = $_FILES['Product_image']['tmp_name'];
    $Product_image_folder = 'images/' . $Product_image;

    $insert_query = mysqli_query($conn, "INSERT INTO market(name, price, image) VALUES ('$Product_name', '$Product_price', '$Product_image')") or die('insert query');

    if ($insert_query) {
        move_uploaded_file($Product_image_temp_name, $Product_image_folder);
        $display_message = "Product inserted successfully";
    } else {
        $display_message = "There is an error inserting";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container">
        <?php
        if (isset($display_message)) {
            echo "<div class='display_message'>
            <span>'" . $display_message . "'</span>
            <i class='fas fa-times' onclick='this.parentElement.style.display=\"none\"'></i>
        </div>";
        }
        ?>
        <h3 class="heading">Add Product</h3>
        <form action="" class="add_product" method="post" enctype="multipart/form-data">
            <input type="text" name="Product_name" placeholder="Enter Product name" class="input_fields" required>
            <input type="number" name="Product_price" min="0" placeholder="Enter Product price" class="input_fields" required>
            <input type="file" name="Product_image" class="input_fields" required accept="image/png, image/jpg, image/jpeg">
            <input type="submit" name="add_product" class="submit-btn" value="Add Product">
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
