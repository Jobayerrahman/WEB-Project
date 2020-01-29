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
                    echo '<a href="pro-image.php">Upload Image</a>';
                }else{
                echo
                    '<img src="'.$readproimage.'" width="150px">';
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
                    <div class="cover_pic">
                    <?php

                    if($readcvimage==null){
                        echo '<a href="cv-image.php">Upload Image</a>';
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
                    <h4>Offer Price: <input type="text" name="offername" id="offername" required>
                    </h4>
                    <hr>

                    <h4>Upload Image:
                    <input type="file" name="image" id="image">
                    </h4>
                    <hr>

                    <h4>Food Type:
                    <select name="foodtype">
                            
                            <option value="Burger">Burger</option>
                            <option value="Pizza">Pizza</option>
                            <option value="Pasta">Pasta</option>
                            <option value="Set Manus">Set Manus</option>
                        </select>

                       
                        </h4>
                    <hr>

                    <h4>Type of offer:
                    <select name="type" onchange='checkvalue(this.value)'>
                            <option>Select Offer Type</option>
                            <option value="Special Discount">Special Discount</option>
                            <option value="Buy One Get One">Buy One Get One</option>
                            <option value="Buy One Get Two">Buy One Get Two</option>
                            
                            <option value="Unlimited">Unlimited</option>
                        </select>

                        <h4 id="discount_label" style="display:none;">Select Discount:
                        <select name="discount" id="discount" style="display:none;">
                        <?php
                        for ($i=0; $i<=100; $i++)
                        {
                        ?>
                            <option value="<?php echo $i;?>"><?php echo $i."%";?></option>
                        <?php
                        }
                        ?>
                        </select>
                        </h4>
                        
                    </h4>
                    <hr>    
                        
                    <h4>Offer duration:

                        <select name="time" id="time">
                        <?php
                        for ($i=0; $i<=30; $i++)
                        {
                        ?>
                            <option value="<?php echo $i;?>"><?php echo $i."-Day";?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </h4>
                    <hr>
                    
                    <h4>Offer Reservation:
                    <select name="reserve">
                            <option value="By Phone">By Phone</option>
                            <option value="First Come First Serve">First Come First Serve</option>
                        </select>
                    </h4>
                    <hr>
                    <h4>Offer For:
                    <select name="person" onchange='checkofferfor(this.value)'>
                            
                            <option value="Everyone">Everyone</option>
                            <option value="Subscriber">Only For Subscribers</option>
                            <option value="Specific">Only For Specific Person</option>
                        </select>

                        <h4 id="person_label" style="display:none;">User ID:
                        <input type="text" name="person_for" id="person_for">
                        </h4>
                        
                    </h4>
                    <hr>
                    <h4>Short Description:
                    <textarea name="description" id="description" cols="60" rows="2"></textarea>
                    </h4>
                    <hr>    

                    <input type="submit" value="Submit" name="submit" class="button3">
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
                            echo '<a href="post_offer.php?page=' . $page . '">' . $page . '</a> ';
                            
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

        function checkvalue(val)
        {
            if(val==="Special Discount"){
                document.getElementById('discount').style.display='block';
                document.getElementById('discount_label').style.display='block';
            }
                
            else{
                document.getElementById('discount').style.display='none'; 
                document.getElementById('discount_label').style.display='none'; 
            }
               
        }
        function checkofferfor(val)
        {
            if(val==="Specific"){
                document.getElementById('person_for').style.display='block';
                document.getElementById('person_label').style.display='block';
            }
                
            else{
                document.getElementById('person_for').style.display='none'; 
                document.getElementById('person_label').style.display='none'; 
            }
               
        }

</script>

</body>

</html>

<?php
$con=mysqli_connect("localhost","root","","food");

if(isset($_POST["submit"]))
{
	if(!$con)
	{
		die("Connection Error :".mysqli_connect_error());
	}
	else
	{
        $offername=$_POST["offername"];
        $type=$_POST["type"];
        $foodtype=$_POST["foodtype"];

        if($type=="Special Discount"){
            $type=$_POST["discount"]."% Discount";
        }
        $duration=$_POST["time"]." Days";
        $reserve=$_POST["reserve"];
        $person=$_POST["person"];
        if($person=="Specific"){
            $person=$_POST["person_for"];
        }

        $image=$_FILES["image"]["name"]; 
        $imagetmp="../images";
        move_uploaded_file($_FILES["image"]["tmp_name"], "$imagetmp".$_FILES["image"]["name"]);

        $description=$_POST["description"];

        $str="INSERT INTO `offertable` (restaurantname,name,food_type,type,duration,reserve,offerfor,image, image_name,description) VALUES ('$name','$offername','$foodtype','$type','$duration','$reserve','$person','$image','$imagetmp','$description');";
        $result=mysqli_query($con,$str);
	}
}
?>