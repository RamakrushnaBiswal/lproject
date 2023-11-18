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


if(isset($_POST["add"])){
    $producId = $_GET["id"];
    $productName = $_POST["hidden_name"];
    $productImage = $_POST["hidden_image"];
    $productPrice = $_POST["hidden_price"];
    $productQuantity = $_POST["quantity"];

    $sql = "INSERT INTO `product_second` (`description`, `image`, `price`, `quantity`) VALUES ('$productName', '$productImage', '$productPrice', '$productQuantity');";
    mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Business</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  p{
    color: red;
  }
  s{
    color:black;
  }
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  .item {
    width: 30%;
    margin: 20px;
    text-align: center;
  }
  img {
    max-width: 80%;
    height: 60%;
    border: 1px solid blue;
  }
  .product-details {
  flex: 1;
  
  border: 1px solid #ccc;
  border-width: 60%;
}
body {
  font-family: Arial, sans-serif;
}
header {
  background-color: skyblue;
  padding: 10px;
  text-align: center;
}
main {
  padding: 20px;
}
footer {
  background-color: #333;
  position: fixed;
  color: #fff;
  width: 100%;
  
  height: 40px;
  bottom:0;
}
.navbar {
overflow: hidden;
background-color: #333;
font-family: Arial;
}


.navbar  {
float: left;
font-size: 16px;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}


.dropdown {
float: left;
overflow: hidden;
}


.dropdown .dropbtn {
font-size: 16px;
border: none;
outline: none;
color: white;
padding: 14px 16px;
background-color: inherit;
font-family: inherit; 
margin: 0; 
}


.navbar a:hover, .dropdown:hover .dropbtn {
background-color: red;
}


.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}


.dropdown-content a {
float: none;
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
text-align: left;
}


.dropdown-content a:hover {
background-color: #ddd;
}


.dropdown:hover .dropdown-content {
display: block;
}
.banner {
text-align: center;
padding: 100px 0;
background-image: url('Sofa-cum-bed.jpg');
background-size: cover;
color: white;
}

.btn {
display: inline-block;
padding: 10px 20px;
background-color: #333;
color: white;
text-decoration: none;
border-radius: 5px;
}

.featured-products {
padding: 50px;
text-align: center;
}

.product {
margin: 20px;
display: inline-block;
}

.product img {
max-width: 100%;
}
.container {
            display: flex;
            flex-wrap: wrap;
        }

        .product {
            width: 250px; /* Adjust the width as per your requirement */
            margin: 10px;
            
            border-radius: 5px;
            padding: 10px;
            text-align: center;
        }

        .product img {
            width: 100%; /* Set a fixed width for the images */
            height: 200px; /* Set a fixed height for the images */
            object-fit: cover; /* Maintain aspect ratio and cover the container */
        }

        h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        p {
            font-weight: bold;
        }

        input[type="text"] {
            width: 40px;
        }
</style>
</head>
<body><b>
  <header>
    <h1>PRODUCT</h1>
    <h3 align="left"><a href="HOME.php"><button> HOME</button></a>  <a href="PRODUCT.php"><button> PRODUCT</button></a></h3>

   
  </header><nav>
  <div class="navbar">
  <div class="dropdown">
      <button class="dropbtn">Bedroom
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="POSTER BED.php">Poster Beds</a>
        <a href="PLATFORM.php">Platform Beds</a>
        <a href="BOX.php">Box Beds</a>
        <a href="LOCAL.php">Local Beds</a>
        <a href="BED TABLE.php">Bed Tables</a>
        <a href="MATTERESS.php">Mattress </a>
        <a href="PILLOW.php">Pillows</a>
        <a href="DRESSING.php">Dressinng </a>
      </div>
    </div>
  </div>
</nav>
  
  <div class="navbar">
    <div class="dropdown">
        <button class="dropbtn">Dining room   
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="DINING.php">Dining Sets</a>
          <a href="DININGTABLE.php">Dining Tables</a>
          <a href="BENCH.php">Benches</a>
          <a href="CHAIR.php">Chairs</a>
          <a href="SIDEBOARD.php">Sideboards</a>
          <a href="#">Local Dining</a>
        </div>
      </div>
    </div>
    <div class="navbar">
      <div class="dropdown">
          <button class="dropbtn">Living Room
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            
            <a href="SOFACUM.php">Sofa Cum Bed</a>
            <a href="3SOFA.php">3 Seater Sofa</a>
            <a href="2SOFA.php">2 Seater Sofa</a>
            <a href="1SEAT.php">Single Seater Sofa</a>
            <a href="LSOFA.php">L shape Sofa</a>
            <a href="EASY.php">Easy Chairs</a>
            <a href="TV.php">Tv Units</a>
            <a href="TABLEBOX.php">Boxes</a>
          </div>
        </div>
      </div>
      <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">God Room
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="MANDIR.php">Mandir</a>
              <a href="PRAYER.php">Prayer Unit</a>
              <a href="RACK.php">Racks</a>
              <a href="BENCH.php">Benches</a>
            </div>
          </div>
        </div>
        <div class="navbar">
          <div class="dropdown">
              <button class="dropbtn">Kitchen Room
                                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="KITCHEN.php">Kitchen Cabinet</a>
                <a href="SIDEBOARD.php">Side Board</a>
                <a href="STAND.php">Stands</a>
                <a href="CHEST.php">Chest Drawer</a>  
                <a href="KITASS.php">Accessories</a>
              </div>
            </div>
          </div>
        <div class="navbar">
          <div class="dropdown">
              <button class="dropbtn">Study
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="STUDYTABLE.php">Study Table</a>
                <a href="WFH.php">WFH Spaces</a>
                <a href="EASY.php">Easy Chairs</a>
                <a href="BOOKSELF.php">Bookselves</a>
                <a href="CLOCK.php">Wall Clock</a>
           
              </div>
            </div>
          </div>
          <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn">Storage
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="BOOKSELF.php">Bookselves</a>
                  <a href="TABLEBOX.php">Boxes</a>
                  <a href="CHEST.php">Chest Drawer</a>
                  <a href="KITCHEN.php">Kitchen Cabinet</a>
                  <a href="SIDEBOARD.php">Shoes Racks</a>

                </div>
              </div>
            </div>
            <div class="navbar">
              <div class="dropdown">
                <button class="dropbtn">Office
                  <i class="fa fa-caret-down"></i>
                </button>
                    <div class="dropdown-content">
                      <a href="OFFICE.php">Office Table</a>
                      <a href="WFH.php">Wfh Spaces</a>
                      <a href="CONFRENCE.php">Confrence Table</a>
                      <a href="EASY.php">Easy Chairs</a>
                      <a href="CLOCK.php">Wall Clock</a>
                    </div>
                  </div>
                </div>
                
                  <div class="navbar">
                    <div class="dropdown">
                      <button class="dropbtn">Accessories
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="#">Shargy Carpet</a>
                          <a href="#">Everyday Carpet</a>
                          <a href="#">Luxury Carpet</a>
                          <a href="#">Handtufed Carpet</a>
                         
                        </div>
                      </div>
                    </div>
                    <div class="navbar">
                      <div class="dropdown">
                        <button class="dropbtn" > Bars
                          <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-content">
                            <a href="BARRACK.php">Bar  Rack</a>
                            <a href="RACK.php"> Racks</a>
                            <a href="BARCHAIR.php">Bar Stool</a>
                            <a href="KITCHEN.php">Cabinet</a>
                            <a href="TV.php">Tv Units</a>
                            
                          </div>
                        </div>
                      </div>
                      <div class="navbar">
                        <div class="dropdown">
                            <button class="dropbtn"> All Decor
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                              <a href="LAMP.php">Table Lamps</a>
                              <a href="STANDL.php">Floor Lamps</a>
                              <a href="CELLING.php">Clling Light</a>
                              <a href="CLOCK.php">Wall Clock</a>
                              <a href="WALL.php">Wal Units</a>
                              <a href="KITCHEN.php ">Kitchen</a>
                            </div>
                          </div>
                        </div>
<body>
    <nav>
        <div>
            <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="auto" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a>
        </div>
    </nav>

    <main>
        <h2>Product</h2>
        <div class="container">
            <?php
            $query = "SELECT * FROM `varoffice` ORDER BY id ASC";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="product">
                        <form action="OFFICE.php?action=add&id=<?php echo $row["id"]?>" method="post">
                        <div class="product">
                            <img src="img/<?php echo $row["image"];?>" alt="">
                            <h3><?php echo $row["description"]?></h3>
                            <p>Rs<?php echo $row["price"];?></p>
                            <input type="text" id="quantity" name="quantity" value="1">
                            <input type="hidden" name="hidden_image" value="<?php echo $row["image"];?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["description"];?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                            <input type="submit" name="add" value="Add to Cart" onClick="addToCart()" >
                        </div>
                        </form>
                    </div>
                    <?php
                }
            }
?>
        </div>
    </main>


    <footer></footer>
</body>
<script>
    function addToCart() {
        alert("Item Added!  Please Go To Your Cart");
    }
</script>
</html>
