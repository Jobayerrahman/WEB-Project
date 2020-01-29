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

            <div id="my_account">
                <h4>My Subscriptions:</h2>
                    <?php
                    $con=mysqli_connect("localhost","root","","food");


                    if(!$con)
                    {
                     die("Connection Error :".mysqli_connect_error());
                    }
                    else
                    {
                    
                        $results_per_page = 10;

                        $sql="SELECT restaurant.*,sub.restaurantname,sub.username FROM restaurant,sub where sub.restaurantname=restaurant.name and sub.username='$username';";
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
                        $sql="SELECT restaurant.*,sub.restaurantname,sub.username FROM restaurant,sub where sub.restaurantname=restaurant.name and sub.username='$username' LIMIT " . $this_page_first_result . ',' .  $results_per_page;

                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result)) {
                            $restaurantname=$row["name"];
                            
                            $image=$row["pro_pic"];
                            $imagefolder=$row["pro_pic_name"];
                            
                            $readimage=$imagefolder."/".$image;
                            //echo $row['offerid'] . ' ' . $row['name']. '<br><br>';
                           // echo $offername . ' ' . '<br>';
                            
                            echo '<div class="card">
                            <div class="offer-img">

                            <a href=""><img src="'.$readimage.'" alt="TakeOut" class="card_img"></a>
                            
                            </div>
                            <div class="offers">
                            <a href=""><h3>'.$restaurantname.'</h3></a>
                            <br>
                            
                            <h4>SUBSCRIPTIONS: </h4>
                            <br>
                            <a href="subscribe_without.php?sub='.$restaurantname.'" class="sub-button">UNSUBSCRIBE</a>
                            
                            </h4>
                            
                            </div>
                           
                            
                            </div>';
                            
                        
                        }
                        
        

                    }
                    ?>
            <div class="card">
                <?php
            // display the links to the pages
                        for ($page=1;$page<=$number_of_pages;$page++) {
                            echo '<a href="user_page.php?page=' . $page . '" class="pagi">' . $page . '</a> ';
                            
                        }
                        ?>
            </div>
                    
            </div>
        </div>

        <div id="footer">
            <div class="w3-container w3-indigo">
                <p>Email:
                    <br> info@foodofferbd.com
                </p>
                <p>
                    
                    <a href="http://localhost/project/user/about_us.php" class="footer_link">About Us</a>
                </p>
            </div>
        </div>
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
        if(isset($_GET["sub"])){
            $sub_name=$_GET["sub"];

            $str="DELETE FROM sub WHERE restaurantname='$sub_name' and username='$username';";
    
            $result=mysqli_query($con,$str);
        }
        
    }
?>