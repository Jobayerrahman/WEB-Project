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
		$str="select * from restaurant where username='".$_SESSION["uname"]."';";
		$result=mysqli_query($con,$str);
		if(mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_array($result);
            $name=$row["name"];
            $username=$row["username"];

            $p_image=$row["pro_pic"];
            $p_imagename=$row["pro_pic_name"];
            $readproimage=$p_imagename."/".$p_image;
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
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    <div id="wrapper">
        <header>
            <div id="header">
                <div id="header_text">
                    <a href="http://localhost/project/manager/user_page.php" id="header_text">Food Offer BD</a>
                    <p>Special food offers and Discounts in Bangladesh</p>
                </div>
            </div>
        </header>

        <div id="navbar">
            <a class="active" href="user_page.php">My Page</a>
            <a href="inbox.php">Inbox</a>
            <a href="notification.php">Notification</a>
            <a href="other_offer.php">Other Restaurant Offers</a>
            <a class="right_nav_ui" href="logout.php">logout</a>
        </div>

        <div class="content">
            <div class="left_content">
            <div class="profile_pic" align="center">
                <?php

if($readproimage==null){
    echo '<a href="pro-image.php">Upload Image</a>';
}else{
echo
    '<img src="'.$readproimage.'" width=150>';
}
?>
                </div>
                <a href="pro-image.php">Upload Image</a>
                <div class="res_name">
                    <p><?php echo $name?></p>
                </div>
                <div>
                    <a href="user_page.php" class="button button2">
                        Home
                    </a>
                </div>
                <div>
                
                    <a href="http://localhost/project/manager/myinfo.php" class="button button2">
                        My Account
                    </a>
                </div>
                <div>
                    <a href="edit_info.php" class="button button2">
                        Edit Information
                    </a>
                </div>
                <div>
                    <a href="http://localhost/project/manager/post_offer.php" class="button button2">
                        Post A Offer
                    </a>
                </div>
                <div>
                    <a href="http://localhost/project/manager/my_posts.php" class="button button2">
                       My Posts
                    </a>
                </div>

            </div>

            <div class="middle_content">
                
                <div class="middle_top">
                <h3>Other Restaurant Offers:</h3>
                <hr>
                <?php
                    $con=mysqli_connect("localhost","root","","food");


                    if(!$con)
                    {
                     die("Connection Error :".mysqli_connect_error());
                    }
                    else
                    {
                    
                        $results_per_page = 10;

                        $sql="SELECT * from offertable where restaurantname NOT Like '$name';";
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
                        $sql="SELECT * from offertable where restaurantname NOT Like '$name' ORDER BY `timestamp` DESC LIMIT " . $this_page_first_result . ',' .  $results_per_page ;

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

                            <a href=""><img src="'.$readimage.'" alt="TakeOut" class="card_img"></a>
                            
                            <h2>'.$restaurantname.'</h2>
                            
                            </div>
                            <div class="offers">

                            <h3>'.$offername.'</h3>
                            <h3>'.$type.'      '.$foodtype.' At '.$restaurantname.'</h3>
                            <h4>'.$description.'</h4>
                            <h4>Reservation: '.$reserve.'</h4>
                            <h4>DURATION: '.$duration.'</h4>
                            <h4>Average Rating: '.$average_rate.'★</h4>

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
                            echo '<a href="other_offer.php?page=' . $page . '" class="pagi">' . $page . '</a> ';
                            
                        }
                        ?>
                    </div>
                </div>


            </div>

            <div class="right_content">
            <p>Subscribers Birthdays Today:</p>
                <?php
                    $con=mysqli_connect("localhost","root","","food");


                    if(!$con)
                    {
                     die("Connection Error :".mysqli_connect_error());
                    }
                    else
                    {
                    
                        $results_per_page = 5;

                        $sql="SELECT userpage.username,userpage.birthdate,sub.username,sub.restaurantname from userpage,sub where sub.restaurantname='$name' and userpage.username=sub.username ;";
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
                        $sql="SELECT userpage.username,userpage.birthdate,sub.username,sub.restaurantname from userpage,sub where sub.restaurantname='$name' and userpage.username=sub.username LIMIT " . $this_page_first_result . ',' .  $results_per_page;

                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result)) {
                            $user_id=$row["username"];
                            $user_birth=$row["birthdate"];

                            $date= date("Y-m-d");

                            if($user_birth==$date){
                                echo ' <a href="">'.$user_id.'</a> <br>';
                            }else{
                                
                            }
                            
                        }
                        echo '<br>';
                        // display the links to the pages
                        for ($page=1;$page<=$number_of_pages;$page++) {
                            echo '<a href="other_offer.php?page=' . $page . '">' . $page . '</a> ';
                            
                        }
                        
        

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


    <script>
        window.onscroll = function () {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>
