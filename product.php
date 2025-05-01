
<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <section class="shopping_cart">
            <h1 class="heading">My Cart</h1>
            <?php
            $display_product = mysqli_query($conn, "SELECT * FROM market") or die('insert query');
            $num = 1;
            if (mysqli_num_rows($display_product) > 0) {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($display_product)) {
                        ?>
                            <tr>
                                <td><?php echo $num ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><img src="images/<?php echo$row['image']?>" alt=<?php echo $row['name'] ?> ></td>
                                <td><?php echo $row['price'] ?></td>
                                <td>Quantity</td> 
                                <td>Total Price</td>
                                <td>
                                    <a href="delete.php?delete=<?php echo $row['id'] ?>" class="class_product_btn" onclick="return confirm('Are you sure you want to delete this product?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="update.php?update=<?php echo $row['id'] ?>" class="class_product_btn" onclick="return confirm('Are you sure you want to update this product?')">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $num++;
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            } else {
                echo "<div class='empty_text'>No products</div>";
            }
            ?>
            <div class="table-bottom"></div>
        </section>
    </div>
</body>
</html>
