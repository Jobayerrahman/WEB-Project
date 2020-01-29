<?php
session_start();
if(!isset($_SESSION["uname"]))
{
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Offer BD</title>
    <link rel="stylesheet" href="../css/user_style.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">
</head>
</head>

<body>
    <div id="wrapper">
        <header>
            <div id="header">
                <div id="header_text">
                    <a href="http://localhost/project/user/user_page.php" id="header_text">Food Offer BD</a>
                    <p>Special food offers and Discounts in Bangladesh</p>
                </div>
            </div>
        </header>

        <nav>

            <div class="w3-bar w3-border w3-card-4 w3-light-grey">
                <a href="http://localhost/project/user/user_page.php" class="w3-bar-item w3-button">Home</a>

                <div class="w3-dropdown-hover">
                    <button class="w3-button">Offer Type</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="http://localhost/project/user/special_discount.php" class="w3-bar-item w3-button">Special Discount</a>
                        <a href="http://localhost/project/user/unlimited_offer.php" class="w3-bar-item w3-button">Unlimited</a>
                        <a href="http://localhost/project/user/buy_one.php" class="w3-bar-item w3-button">Buy One Get Oe</a>
                    </div>
                </div>
                <div class="w3-dropdown-hover">
                    <button class="w3-button">Catagories</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="http://localhost/project/user/category_burger.php" class="w3-bar-item w3-button">Burger</a>
                        <a href="http://localhost/project/user/category_pizza.php" class="w3-bar-item w3-button">Pizza</a>
                    </div>
                </div>
                <a href="http://localhost/project/user/restaurant.php" class="w3-bar-item w3-button">Restaurants</a>
                <a href="http://localhost/project/user/location.php" class="w3-bar-item w3-button">Location</a>
                <a href="http://localhost/project/user/about_us.php" class="w3-bar-item w3-button">About Us</a>
            </div>
        </nav>


        <div id="content_wrapper">
            <div id="right_sidebar">
            <div class="pro_img" align="center">
                    <img src="../images/user.jpg" alt="user" width="200px">
                </div>

                <p>User Name</p>
                <a href="http://localhost/project/user/my_account.php">
                    <button class="bttn-float bttn-sm bttn-primary">My Account</button>
                </a>
                <br>
                <br>
                <a href="http://localhost/project/user/subscribe_without.php">
                    <button class="bttn-float bttn-sm bttn-primary">My Subscriptions</button>
                </a>
                <br>
                <br>

                <a href="logout.php">
                    <button class="bttn-float bttn-sm bttn-primary">Logout</button>
                </a>
                <br>
                <h4>Personal Links</h4>
                <hr>
                <a href="http://localhost/project/user/wishlist.php">Wishlist</a>
                <a href="http://localhost/project/user/my_rating.php">My Ratings</a>
                <a href="http://localhost/project/user/bookmarks.php">Bookmarks</a>
            </div>

            <div id="my_account">
                <h4>Bookmarks:</h2>
                    <div class="media">
                        <div class="media-left">
                            <img src="../images/takeout.jpg" class="media-object" style="width:150px">
                        </div>
                        <div class="media-body">
                            <a href="http://localhost/project/user/individual_restaurent.php">
                                <h3 class="media-heading">Takeout</h3>
                            </a>
                            <br>
                            <p>Subscribers: </p>
                        </div>
                       
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="../images/manik.jpg" class="media-object" style="width:150px">
                        </div>
                        <div class="media-body">
                            <a href="http://localhost/project/user/individual_restaurent.php">
                                <h3 class="media-heading">Mr. Manik</h3>
                            </a>
                        
                            <br>
                            <p>Subscribers: </p>
                        </div>
                    </div>
                    <div class="w3-bar">
                        <a href="#" class="w3-button">«</a>
                        <a href="#" class="w3-button w3-blue">1</a>
                        <a href="#" class="w3-button">2</a>
                        <a href="#" class="w3-button">3</a>
                        <a href="#" class="w3-button">4</a>
                        <a href="#" class="w3-button">»</a>
                    </div>
            </div>
        </div>

        <div id="footer">
            <div class="w3-container w3-indigo">
                <p>Email:
                    <br> info@foodofferbd.com
                </p>
                <p>
                    <a href="http://localhost/project/user/contact_us.php" class="footer_link">Connect Us</a>
                    <a href="http://localhost/project/user/about_us.php" class="footer_link">About Us</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>