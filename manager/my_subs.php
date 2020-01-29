<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Offer BD</title>
    <link rel="stylesheet" href="../css/manager_style.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">
    <link rel="stylesheet" href="/css_buttons/pushy-buttons.min.css">
</head>
</head>

<body>
    <div id="wrapper">
        <header>
            <div id="header">
                <div id="header_text">
                    <a href="http://localhost/project/manager/user_page.php" id="header_text">Food Offer BD</a>
                    <p>Special food offers and Discounts in Bangladesh</p>
                </div>
            </div>
        </header>

        <nav>

            <div class="w3-bar w3-border w3-card-4 w3-light-grey">
                <a href="http://localhost/project/manager/user_page.php" class="w3-bar-item w3-button">Home</a>
                <a href="http://localhost/project/manager/offer_type.php" class="w3-bar-item w3-button">All Offers</a>

                <a href="http://localhost/project/manager/restaurant.php" class="w3-bar-item w3-button">Restaurants</a>
                <a href="http://localhost/project/manager/location.php" class="w3-bar-item w3-button">Location</a>
                <a href="http://localhost/project/manager/about_us.php" class="w3-bar-item w3-button">About Us</a>
            </div>
        </nav>

        <div id="main_content">
            <div id="left_body">
                <div id="upper_body">
                    <div>
                        <img src="../images/cover.jpg" alt="Mr. Manik" id="cover_pic">
                    </div>

                    <div>
                        <h3>Mr. Manik Foods</h3>
                    </div>

                    <div class="w3-bar w3-white">
                        <a href="http://localhost/project/manager/my_account.php" class="w3-bar-item w3-button">My Info</a>
                        <a href="http://localhost/project/manager/my_subs.php" class="w3-bar-item w3-button">Subscriptions</a>
                        <a href="http://localhost/project/manager/my_offers.php" class="w3-bar-item w3-button">My Offers</a>
                        <a href="http://localhost/project/login/login.php" class="w3-bar-item w3-button">Log Out</a>
                    </div>

                </div>

                <div id="lower_body">
                    <div id="info_right">
                        <h4>My Subscriptions</h2>
                            <div class="media">
                                <div class="media-left">
                                    <img src="../images/takeout.jpg" class="media-object" style="width:100px">
                                </div>
                                <div class="media-body">
                                    <a href="http://localhost/project/user/individual_restaurent.php">
                                        <h3 class="media-heading">Takeout</h3>
                                    </a>
                                    <br>
                                    <p>Subscribers: </p>
                                </div>
                                <hr>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img src="../images/manik.jpg" class="media-object" style="width:100px">
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
            </div>
        </div>
        <div id="right_body">
            <h4>Upcoming Birthdays:</h4>
            <ul>
                <li>Today
                    <ol>
                        <li>aaa</li>
                        <li>bbb</li>
                        <li>ccc</li>
                    </ol>
                </li>
                <br>
                <br>
                <li>Tomorrow
                    <ol>
                        <li>ddd</li>
                        <li>eee</li>
                        <li>fff</li>
                    </ol>
                </li>
            </ul>
        </div>
    </div>


    </div>
</body>

</html>