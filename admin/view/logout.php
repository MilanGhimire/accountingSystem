<?php
include_once '../../Controller/call.php';
session_destroy();
$helper = new Helper();
$helper->redirect('../../index.php');