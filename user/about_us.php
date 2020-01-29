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
	<link rel="stylesheet" href="../css/style.css">
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


		<div>
			<h1>About Food Offer BD</h1>

			<p>
				<h5>Food Offer BD - an online/digital billboard and deal aggregation service for delivering all types of information on published
					offers for restaurants.</h5>
			</p>

			<p>
				<b>Food Offer BD</b> Food Offer BD is the first web portal providing information on offers (like Special discounts, Buy
				& Get free, Bank Cards, Mobile SIM subscribers, Prize & Quiz on Purchase, Supershops) in Bangladesh. We are offering
				information on latest offers since July 7, 2015. We don’t make any trade in our portal. We simply are an online advertiser.
				Companies can post their offers at www.FoodOfferBD.com for FREE now. We want to take their offers and information to
				the consumer’s mobile or computer screen via our portal and social media pages without any cost. We bring you all the
				deals in one place provided by your favorite brands, companies, shops, restaurants and other businesses. We provide offers
				from a wide range of shopping sectors in Bangladesh. Next time you are shopping for something checkout Food Offer BD
				to find the greatest deals and biggest savings. For any query and suggestion please Contact us.</p>

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