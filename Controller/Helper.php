<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Helper {
    public function redirect($path) {
        header('location:'.$path);
    }
    
    public function checkUserLogin() {
        if (isset($_SESSION['user']['username'])) {
            return true; 
        }
    }
    
    public function checkAdminLogin() {
        if (isset($_SESSION['admin']['username'])) {
            return true;
        }
        return false;
    }
    
    public function successMessage($message) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $contain = '<div class="alert alert-success fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="icon-remove"></i>
                    </button>
                    <strong>' . $message . '
                </div>';

	$_SESSION['showMessage'] = $contain;
    }
    
    public function errorMessage($message) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $contain = '<div class="alert alert-block alert-danger fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        <strong>' . $message . '
                    </div>';
        $_SESSION['showMessage'] = $contain;
    }
}
