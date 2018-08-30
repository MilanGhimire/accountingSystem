<?php

include_once '../call.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['app_submit'])) {
    echo 'entered.';
    $full_name = $_POST['fullname'];
    $email = $_POST['email'];
    $date = $_POST['app_date'];
    $phoneNumber = $_POST['phone_number'];
    
    $appointment = new Appointment();
    $check = $appointment->addAppointment($full_name, $email, $date, $phoneNumber);
    $helper = new Helper();
    if ($check) {
        $helper->successMessage('Appointment submitted successfully.');
        $helper->redirect('../../user/view/appointment.php');
    } else {
        $helper->errorMessage('Try again. Appointment submittion failed.');
        $helper->redirect('../../user/view/appointment.php');
    }
}

