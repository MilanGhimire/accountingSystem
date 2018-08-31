<?php

include_once '../call.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['feedbackSubmit'])) {
    $full_name = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $feedback = new Feedback();
    $check = $feedback->addFeedback($full_name, $email, $message);
    $helper = new Helper();
    if ($check) {
        $helper->successMessage('Appointment submitted successfully.');
        if (isset($_SESSION['showMessage'])) {
            echo 'message is in session';
        }
        $helper->redirect('../../contact.php');
    } else {
        $helper->errorMessage('Try again. Appointment submittion failed.');
        $helper->redirect('../../contact.php');
    }
}

