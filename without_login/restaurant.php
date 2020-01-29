<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Offer BD</title>
    <link rel="stylesheet" href="../css/restaurants.css">

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
</head>

<body>
    <div id="wrapper">
    <div id="wrapper">
        <header>
            <div id="header">
                <div id="header_text">
                    <a href="http://localhost/project/index.php" id="header_text">Food Offer BD</a>
                    <p>Special food offers and Discounts in Bangladesh</p>
                </div>
            </div>
        </header>



        <div class="w3-bar w3-border w3-card-4 w3-light-grey">
            <a href="http://localhost/project/index.php" class="w3-bar-item w3-button">Home</a>

            <div class="w3-dropdown-hover">
                <button class="w3-button">Offer Type</button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="http://localhost/project/without_login/special_discount.php" class="w3-bar-item w3-button">Special Discount</a>
                    <a href="http://localhost/project/without_login/unlimited_offer.php" class="w3-bar-item w3-button">Unlimited</a>
                    <a href="http://localhost/project/without_login/buy_one.php" class="w3-bar-item w3-button">Buy One Get One</a>
                    <a href="http://localhost/project/without_login/buy_one.php" class="w3-bar-item w3-button">Buy One Get two</a>
                </div>
            </div>
            <div class="w3-dropdown-hover">
                <button class="w3-button">Catagories</button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="http://localhost/project/without_login/category_burger.php" class="w3-bar-item w3-button">Burger</a>
                    <a href="http://localhost/project/without_login/category_pizza.php" class="w3-bar-item w3-button">Pizza</a>
                    <a href="http://localhost/project/without_login/category_pizza.php" class="w3-bar-item w3-button">Pasta</a>
                </div>
            </div>
            <a href="http://localhost/project/without_login/restaurant.php" class="w3-bar-item w3-button">Restaurants</a>
            <a href="http://localhost/project/without_login/location.php" class="w3-bar-item w3-button">Location</a>
            <a href="http://localhost/project/without_login/about_us.php" class="w3-bar-item w3-button">About Us</a>

            <a href="http://localhost/project/login/registation_page.php" class="w3-bar-item w3-button w3-right">Register</a>
            <a href="http://localhost/project/login/login.php" class="w3-bar-item w3-button w3-right">Login</a>

        </div>

        <div id="content_wrapper">
            <div id="right_sidebar">
                <h3>Top Offers</h3>
                <ul>
                    <li>
                        <a href="">Unlimited burger offer at Takeout</a>
                    </li>
                    <li>
                        <a href="">Up to 50% discount at PizzaBurg</a>
                    </li>
                    <li>
                        <a href="">20% discount at Buffet King for DBL card holders</a>
                    </li>
                </ul>
            </div>

            <div id="slide_show">
                <h2>Featured Offers</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="../images/burger_king.jpg" alt="Burger King" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="../images/food_republic.jpg" alt="Food Republic" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="../images/pizza_hut.jpg" alt="Pizza Hut" style="width:100%;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>

        <div id="main_body">
            <h2 class="h2_style">All Restaurants:</h2>
            <div class="container">
                <div class="media">
                    <div class="media-left">
                        <img src="../images/takeout.jpg" class="media-object" style="width:200px">
                    </div>
                    <div class="media-body">
                        <a href="http://localhost/project/without_login/individual_restaurent.php"><h3 class="media-heading">Takeout</h3></a>
                        <br><br>
                        <p>Subscribers: </p>
                    </div>
                    
                </div>
                <div class="media">
                    <div class="media-left">
                        <img src="../images/manik.jpg" class="media-object" style="width:200px">
                    </div>
                    <div class="media-body">
                        <a href="http://localhost/project/without_login/individual_restaurent.php"><h3 class="media-heading">Mr. Manik</h3></a>
                        <br><br>
                        <p>Subscribers: </p>
                    </div>
                    
                </div>
                <div class="media">
                    <div class="media-left">
                        <img src="../images/pizza.jpg" class="media-object" style="width:200px">
                    </div>
                    <div class="media-body">
                        <a href="http://localhost/project/without_login/individual_restaurent.php"><h3 class="media-heading">Pizza Hut</h3></a>
                        <br><br>
                        <p>Subscribers: </p>
                    </div>
                   
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

        <div id="footer">
            <div class="w3-container w3-indigo">
                <p>Email:
                    <br> info@foodofferbd.com
                </p>
                <p>
                    <a href="http://localhost/project/contact_us.php" class="footer_link">Connect Us</a>
                    <a href="http://localhost/project/about_us.php" class="footer_link">About Us</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>