<?php
if (isset($_POST['submit'])){
    include_once 'dbh.inc.php';
    $title = mysqli_real_escape_string($conn, $_POSt['title']);
    $last = mysqli_real_escape_string($conn, $_POSt['last']);
    $first = mysqli_real_escape_string($conn, $_POSt['first']);
    $designation = mysqli_real_escape_string($conn, $_POSt['designation']);
    $email = mysqli_real_escape_string($conn, $_POSt['email']);
    $mobile = mysqli_real_escape_string($conn, $_POSt['mobile']);
    $pword = mysqli_real_escape_string($conn, $_POSt['pword']);
    $intercom = mysqli_real_escape_string($conn, $_POSt['intercom']);
    //error handlers
    if (empty($first)||empty($last)||empty($title)||empty($designation)||empty($email)||empty($designation)||empty($pword)){
        header("Locatio:../signup.html?");
        exit;
    }
    else{
//check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$",$first,$last) ){
            header("Locatio:../signup.html");
            exit
        }
    }
    {
        header("Locatio:../signup.html");
        exit();  
      }
