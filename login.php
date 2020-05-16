<?php 
session_start();
if(isset($_POST['email']) && isset($_POST['password'])){
    if($_POST['email']=="admin@example.com" &&      $_POST['password']=="admin123"){
        $_POST['status']='success';
        $_SESSION['userid']='admin';
        echo json_encode($_POST);
    }
    else {
        $_POST['status']='error';
        echo json_encode($_POST);
    }
}
?>