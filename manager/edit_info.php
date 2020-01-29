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
            $email=$row["email"];
            $contact=$row["contact"];
            $detail=$row["detail"];
            $house=$row["house"];
            $road=$row["road"];
            $area=$row["area"];
            $city=$row["city"];

            $p_image=$row["pro_pic"];
            $p_imagename=$row["pro_pic_name"];
            $readproimage=$p_imagename."/".$p_image;

            $c_image=$row["cv_pic"];
            $c_imagename=$row["cv_pic_name"];
            $readcvimage=$c_imagename."/".$c_image;
        }
        $sql="select * from sub where restaurantname='$name';";
        $result = mysqli_query($con, $sql);
        $sub_count = mysqli_num_rows($result);


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
            <form action="<?php echo $_SERVER["PHP_SELF"];  ?>" method="post" enctype="multipart/form-data">

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
    echo '<a href="edit_info.php">Upload Image</a>';
}else{
echo
    '<img src="'.$readproimage.'" width="150px">';
}
    ?>
                            </div>
                            <a href="pro-image.php">Upload Image</a>
                            <div class="res_name">
                            
                                <p>
                                    <?php echo $name?>
                                </p>
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
                                <div class="cover_pic">
                                <?php

if($readcvimage==null){
    echo '<a href="edit_info.php">Upload Image</a>';
}else{
echo
    '<img src="'.$readcvimage.'" width=100%>';
}
?>
                               <a href="cv-image.php">Upload Cover Picture</a>
                    </div>
                    <hr>
                    <div class="sub_count">
                        <h4>SUBSCRIBER: <a href=""><?php echo $sub_count ?></a>
                        
                        </h4>
                    </div>
                            </div>

                            <div class="middle_bottom">
                                <div id="info_right">

                                    
                                    <h4>Name: <input type="text" name="name" id="name" value="<?php echo $name?>" required></h4>
                                    <hr>

                                    

                                    <h4>Email: <input type="email" name="email" id="email" value="<?php echo $email?>" required></h4>
                                    <hr>

                                    <h4>Contact: <input type="text" name="contact" id="contact" value="<?php echo $contact?>" required></h4>

                                    <hr>

                                    <h4>Address: <input type="text" name="house" id="house" placeholder="House No" class="input-small" value="<?php echo $house?>" required>

                                    <input type="text" name="road" id="road" placeholder="Road No" class="input-small" value="<?php echo $road?>" required>

                                    <select name="area" id="area" value="<?php echo $area?>">
                                        <option value="Uttara">Uttara</option>
                                        <option value="Banani">Banani</option>
                                        <option value="gulshan">Gulshan</option>
                                        <option value="Mirpur">Mirpur</option>
                                    </select>
                                    <select name="city" id="city" value="<?php echo $city?>">
                                        <option value="Dhaka">Dhaka</option>
                                       
                                    </select>
                                    </h4>
                                    <hr>
                                    <h4>Short Info: 
                                    <textarea name="detail" id="detail" cols="60" rows="2" required><?php echo $detail?></textarea></h4>
                                    <br><hr>
                                    <input type="submit" value="Submit" name="submit" class="button3" onclick="myFunction()"> 
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
                            echo '<a href="edit_info.php?page=' . $page . '">' . $page . '</a> ';
                            
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
                                <a href="http://localhost/project/contact_us.php" class="footer_link">Connect Us</a>
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


<?php
$con=mysqli_connect("localhost","root","","food");
if(isset($_POST["submit"])){
    
    if(!$con)
	{
		die("Connection Error :".mysqli_connect_error());
	}
	else
	{
		$name=$_POST["name"];
        $email=$_POST["email"];
        $contact=$_POST["contact"];
        $detail=$_POST["detail"];
        $house=$_POST["house"];
        $road=$_POST["road"];
        $area=$_POST["area"];
        $city=$_POST["city"];

       
		
		$str="UPDATE restaurant SET name='$name',email='$email',contact='$contact',detail='$detail',house='$house',road='$road',area='$area',city='$city' WHERE username='$username';";

        $result=mysqli_query($con,$str);
        //header("Refresh:10");
        echo("<meta http-equiv='refresh' content='1'>");

    }
}

?>        

