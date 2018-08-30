<?php

include_once '../Account.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['signup'])) {
    $full_name = $_POST['full_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = "user";

    echo $full_name;
    echo $address;
    echo $email;
    echo $contact;
    echo $username;
    echo $password;
    
    $account = new Account();
    $check = $account->register($full_name, $address, $contact, $email, $username, $password, $userType);
    if ($check) {
        echo 'User created.';
    } else {
        echo 'Error while creating user.';
    }
}

