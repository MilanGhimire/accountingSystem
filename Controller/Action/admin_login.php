<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../call.php';

if (isset($_POST['admin_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = 'admin';
    
    $account = new Account;
    $helper = new Helper();
    $check = $account->login($username, $password, $usertype);
    if ($check) {
        echo 'entered...';
        $helper->redirect('../../admin/view/index.php');
    } else {
        $helper->redirect('../../admin/view/login.php');
    }
}