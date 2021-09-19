<?php
session_start();
putenv("server_path=https://cashyou-app.herokuapp.com");
$_SESSION["needRedirect"] = false;
if ($_SESSION["isAuthenticated"] == true){
    header("Location: ".getenv("server_path")."/admin/addQuestion.php");

}else{
    header("Location: ".getenv("server_path")."/admin/login.php");
}