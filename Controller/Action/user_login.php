<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Account.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $usertype = 'user';

    echo $username;
    echo $password;
    
    $account = new Account;
    $check = $account->login($username, $password, $usertype);
    if ($check) {
        echo 'User exist';
    } else {
        echo 'User dont exist.';
    }
}
