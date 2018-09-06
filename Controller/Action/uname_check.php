<?php

include_once '../Account.php';

/* Get username */
$uname = $_POST['uname'];

$account = new Account;
$check = $account->checkUsername($uname);
echo $check;
