<?php
session_start();
if(!isset($_SESSION["uname"]))
{
    header("Location: ../index.php");
}
?>

<?php

$con=mysqli_connect("localhost","root","","food");


	if(!$con)
	{
		die("Connection Error :".mysqli_connect_error());
	}
	else
	{
		$str="select * from userpage where username='".$_SESSION["uname"]."';";
		$result=mysqli_query($con,$str);
		if(mysqli_num_rows($result)>0)
		{
            $row=mysqli_fetch_array($result); 
            //$userid=$row["userid"];
            $username=$row["username"];
            $image=$row["image"];
            $image_folder=$row["imagefolder"];
            $readimage=$image_folder."/".$image;
		}

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
</head>

<body>
<form action="<?php echo $_SERVER["PHP_SELF"];  ?>" method="post" enctype="multipart/form-data">
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
                        <a href="http://localhost/project/user/buy_one.php" class="w3-bar-item w3-button">Buy One Get One</a>
                        <a href="http://localhost/project/user/get_two.php" class="w3-bar-item w3-button">Buy One Get two</a>
                    </div>
                </div>
                <div class="w3-dropdown-hover">
                    <button class="w3-button">Catagories</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="http://localhost/project/user/category_burger.php" class="w3-bar-item w3-button">Burger</a>
                        <a href="http://localhost/project/user/category_pizza.php" class="w3-bar-item w3-button">Pizza</a>
                        <a href="http://localhost/project/user/pasta.php" class="w3-bar-item w3-button">Pasta</a>
                        <a href="http://localhost/project/user/set_manu.php" class="w3-bar-item w3-button">Set Manu</a>
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
                <?php

                 if($readimage==null){
                    echo '<a href="edit_info.php">Upload Image</a>';
                }else{
                echo
                '<img src="'.$readimage.'" width=150 height=100><br><br>';
                }
                ?>
                  
                </div>
                <a href="edit_info.php">Upload Image</a>
                <hr>
                <p align="center"><?php echo $username?></p>
                <a href="my_account.php"  class="button button2">
                    My Account
                </a>
                <br>
                <br>
                <a href="subscribe_without.php"  class="button button2">
                     My Subscriptions</button>
                </a>
                <br>
                <br>

                <a href="logout.php"  class="button button2">
                    Logout
                </a>
                <br>
                <h4>Personal Links</h4>
                <hr>
                
                <a href="http://localhost/project/user/my_rating.php">My Ratings</a>
                <a href="http://localhost/project/user/bookmarks.php">Bookmarks</a>
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
                            <img src="../images/burger_king.jpg" alt="Burger King" class="slider_img">
                        </div>

                        <div class="item">
                            <img src="../images/food_republic.jpg" alt="Food Republic" class="slider_img">
                        </div>

                        <div class="item">
                            <img src="../images/pizza_hut.jpg" alt="Pizza Hut" class="slider_img">
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
            <div class="w3-container">
                <div class="w3-bar w3-blue">
                    <a href="http://localhost/project/user/user_page.php" class="w3-bar-item w3-button">All Offers</a>
                    <a href="http://localhost/project/user/subscribe.php" class="w3-bar-item w3-button">Subscribed</a>
                   
                    <a href="http://localhost/project/user/special.php" class="w3-bar-item w3-button">My Special Offers</a>
                    
                </div>
                
            </div>

                <div class="card">
                <h3>MY SPECIAL OFFERS</h3>
                </div>
                
            <?php
                    $con=mysqli_connect("localhost","root","","food");


                    if(!$con)
                    {
                     die("Connection Error :".mysqli_connect_error());
                    }
                    else
                    {
                    
                        $results_per_page = 10;

                        $sql="SELECT * from offertable WHERE offerfor='".$username."' ;";
                        $result = mysqli_query($con, $sql);
                        $number_of_results = mysqli_num_rows($result);
                        
                        // determine number of total pages available
                        $number_of_pages = ceil($number_of_results/$results_per_page);
                        // determine which page number visitor is currently on
                        if (!isset($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }
                        // determine the sql LIMIT starting number for the results on the displaying page
                        $this_page_first_result = ($page-1)*$results_per_page;
                        // retrieve selected results from database and display them on page
                        $sql="SELECT * from offertable WHERE offerfor='".$username."' ORDER BY `timestamp` DESC LIMIT " . $this_page_first_result . ',' .  $results_per_page;

                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result)) {
                            $restaurantname=$row["restaurantname"];
                            
                            $offerid=$row["offerid"];
                            $offername=$row["name"];
                            $type=$row["type"];
                            $foodtype=$row["food_type"];
                            $duration=$row["duration"];
                            $reserve=$row["reserve"];
                            $offerfor=$row["offerfor"];
                            $image=$row["image"];
                            $imagefolder=$row["image_name"];
                            $description=$row["description"];
                            $rating_total=$row["rating_total"];
                            $rating_count=$row["rating_count"];
                            

                            if($rating_count==0){
                                $average_rate="0";
                            }else{
                                $average_rate=$rating_total/$rating_count;
                                $average_rate=number_format($average_rate, 1);
                            }

                            $readimage=$imagefolder."/".$image;
                            //echo $row['offerid'] . ' ' . $row['name']. '<br><br>';
                           // echo $offername . ' ' . '<br>';
                            
                           echo '<div class="card">
                           <div class="offer-img">

                           <a href="individual-restaurant.php"><img src="'.$readimage.'" alt="TakeOut" class="card_img"></a>
                           
                           <a href="special.php?sub='.$restaurantname.'"><h2>'.$restaurantname.' 
                           <a href="special.php?sub='.$restaurantname.'" class="sub-button">SUBSCRIBE</a></h2> </a>
                           
                           </div>
                           <div class="offers">
                           <h3>'.$type.'      '.$foodtype.' At '.$restaurantname.'</h3>

                           <h4>Offer Price: '.$offername.'</h4>
                           
                           <h4>'.$description.'</h4>
                           <h4>Reservation: '.$reserve.'</h4>
                           <h4>DURATION: '.$duration.'</h4>
                           <h4>Average Rating: '.$average_rate.'★</h4>

                           <h4>Rate:';
                           
                           
                           for ($x = 1; $x <= 5; $x++) {
                               ?>
                               <a href="special.php?item=<?php echo $offerid; ?>&rating=<?php echo $x; ?>"><?php echo $x; ?></a>
                               <?php
                           } // end-of FOR
                           
                           
                           
                           
                           echo '</h4>
                           
                           </div>
                          
                           <div>
                           <a href="special.php?offer='.$offerid.'" class="btn">Bookmark Offer</a>
                           </div>
                           </div>';
                           
                            
                        
                        }
                        
        

                    }
                    ?>
            <div class="card">
                <?php
            // display the links to the pages
                        for ($page=1;$page<=$number_of_pages;$page++) {
                            echo '<a href="special.php?page=' . $page . '" class="pagi">' . $page . '</a> ';
                            
                        }
                        ?>
            </div>

            
                    
        </div>

        
        <footer class="footer">
            <div>
                <p>Email:
                    <br> info@foodofferbd.com
                </p>
                <p>
                   
                    <a href="http://localhost/project/about_us.php" class="footer_link">About Us</a>
                </p>
            </div>

        </footer>
        
    </div>

    
    </form>
    
</body>

</html>



<?php

$con=mysqli_connect("localhost","root","","food");

    if(!$con)
    {
        die("Connection Error :".mysqli_connect_error());
    }
    else
    {
        if (isset($_GET['rating']))
            if (isset($_GET['item'], $_GET['rating'])) {

            $item = $_GET['item'];
            $rating = $_GET['rating'];

            $str1="SELECT * FROM offertable where offerid='$item' ;";
            $result = mysqli_query($con, $str1);
            while($row = mysqli_fetch_array($result)) {
                $rating_total_id=$row["rating_total"];
                $rating_count_id=$row["rating_count"];

            }

            $rating_total_id=$rating_total_id+$rating;
            $rating_count_id=$rating_count_id+1;

            $str="UPDATE offertable SET rating_total='$rating_total_id',rating_count='$rating_count_id' WHERE offerid='$item' ;";
    
            $result=mysqli_query($con,$str);
            //echo("<meta http-equiv='refresh' content='1'>");
        }

        if(isset($_GET["sub"])){
            $sub_name=$_GET["sub"];

            $str="INSERT INTO sub (username,restaurantname) VALUES ('$username','$sub_name') ;";
    
            $result=mysqli_query($con,$str);
        }
        if(isset($_GET["offer"])){
            $offer_name=$_GET["offer"];

            $str="INSERT INTO bookmark (username,restaurantname) VALUES ('$username','$offer_name') ;";
    
            $result=mysqli_query($con,$str);
        }
        if(isset($_GET["offer"])){
            $offer_name=$_GET["offer"];

            $str="INSERT INTO bookmark (username,restaurantname) VALUES ('$username','$offer_name') ;";
    
            $result=mysqli_query($con,$str);
        }
    }
?>