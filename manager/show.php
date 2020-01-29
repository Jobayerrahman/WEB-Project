<?php
    if(isset($_POST['submit'])){
        if($_POST['name']!=null && $_POST['price']!=null){
            echo $_POST['name']." ".$_POST['type']." ".$_POST['price']." ".$_POST['duration']." ".$_POST['reserve'];
        }else{
            echo "invalid";
        }
    }else{
        echo "invalid";
    }

?>