<?php

include_once '../call.php';
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
    $password = md5($_POST['password']);
    $userType = "user";

//    echo $full_name;
//    echo $address;
//    echo $email;
//    echo $contact;
//    echo $username;
//    echo $password;

    $account = new Account();
    $check = $account->register($full_name, $address, $contact, $email, $username, $password, $userType);
    $helper = new Helper();
    if ($check) {
        $helper->successMessage('Register submitted successfully.');
        if (isset($_SESSION['showMessage'])) {
            echo 'message is in session';
        }
        $helper->redirect('../../user/view/register.php');
    } else {
        $helper->errorMessage('Try again. Register submittion failed.');
        $helper->redirect('../../user/view/register.php');
    }
}

