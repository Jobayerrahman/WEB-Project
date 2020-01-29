<?php
    
    if(isset($_POST['submit'])){

        $user=$_POST['username'];
        $password=$_POST['password'];

        if(strlen($user)!=0 && strlen($password)!=0){
            if($user==111 && $password==111){
                header("Location: http://localhost/project/admin/admin_page.php");
            }
            elseif($user==222 && $password==222){
                header("Location: http://localhost/project/user/user_page.php");
            }
            elseif($user==333 && $password==333){
                header("Location: http://localhost/project/manager/user_page.php");
            }
        }
        
    }

    if(isset($_POST['new_pass_submit'])){
        $name=$_POST['username'];
        $new_pass=$_POST['password'];
        $confirm_pass=$_POST['confirm_password'];

        if(strlen($name)!=0 && strlen($new_pass)!=0 && strlen($confirm_pass)!=0){
            if($new_pass==$confirm_pass){
                echo "New Password successfully applied";
            }else{
                echo "invalid";
            }
        }else{
            echo "invalid";
        }
    }

    if(isset($_POST['user_submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $confirm_pass=$_POST['con_password'];
        $birth=$_POST['dob'];

        if($name!=null && $email!=null && $pass!=null && $confirm_pass!=null && $birth!=null && $_POST['gender']!=null){
            if($pass==$confirm_pass){
                echo $name." ".$email." ".$pass." ".$_POST['gender']." ".$birth;
            }
        }else{
            echo "invalid";
        }
    }

    if(isset($_POST['res_submit'])){
        $name=$_POST['res_name'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $confirm_pass=$_POST['con_password'];
        $flat=$_POST['flat'];
        $house=$_POST['house'];
        $road=$_POST['road'];
        $city=$_POST['city'];
        $area=$_POST['area'];
        $des=$_POST['comment'];

        if($name!=null && $email!=null && $pass!=null && $confirm_pass!=null && $flat!=null && $house!=null && $road!=null && $des!=null){
            if($pass==$confirm_pass){
                echo $name." ".$email." ".$pass." ".$flat." ".$house." ".$road." ".$city." ".$area." ".$des." ".$email;
            }
        }else{
            echo "invalid";
        }
    }
?>