<?php
session_start();
$host     = "127.0.0.1";
$port     = 3310;
$socket   = "MySQL";
$user     = "bunty";
$password = "@Bunty1990";
$dbname   = "productdb";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());

if(isset($_GET["action"]) && $_GET["action"] == "delete"){
    $productName = $_GET["name"];
    $deleteQuery = "DELETE FROM `product_second` WHERE description = '$productName'";
    mysqli_query($conn, $deleteQuery);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="product.html">Shop Here</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h3 class="mt-3">Cart</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Remove Item</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM `product_second` ORDER BY id ASC";
                    $result = mysqli_query($conn, $query);
                    $total = 0;
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><img src="img/<?php echo $row["image"];?>" alt="" class="img-thumbnail" style="width: 100px; height: 100px;"></td>
                                <td><?php echo $row["description"];?></td>
                                <td>₹<?php echo $row["price"];?></td>
                                <td><?php echo $row["quantity"];?></td>
                                <td>₹<?php echo number_format($row["quantity"] * $row["price"], 2);?></td>
                                <td><a href="cart.php?action=delete&name=<?php echo $row["description"];?>"><button class="btn btn-warning"><span>Remove Item</span></button></a></td>
                                <?php
                                $total = $total + ($row["quantity"] * $row["price"]);
                            }
                        }
                        ?>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td>₹<?php echo number_format($total, 2);?></td>
                            <td>
                                <?php
                                    if($total>=1){
                                        echo '<a href="payment.html?totalAmount=' . number_format($total, 2) . '" class="btn btn-primary">Proceed to Payment</a>';
                                        echo '<br>';
                                        echo '<br>';
                                        echo '<a href="HOME.php"><button class="btn btn-danger">Go Back to Home</button></a>';
                                    }
                                    else{
                                        echo '<button class="btn btn-danger" disabled>Cart is empty</button>';
                                        echo '<br>';
                                        echo '<br>';
                                        echo '<a href="HOME.php"><button class="btn btn-warning">Go Back to Home</button></a>';
                                    }
                                ?>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    <footer style="text-align:center">Made by Team Beast❤️</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
