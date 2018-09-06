<?php
include_once ('DbConnection.php');
session_start();

class Account// extends DbConnection
{
    public $conn = null;
    function __construct()
    {
        //parent::DBConnection();
        $con = new DbConnection();
        $this->conn = $con -> getConnections();
    }

    public function register($full_name, $address, $contact, $email, $username, $password, $usertype) {

        $BrandInsert = $this->conn->prepare("INSERT INTO `db_accounting`.`tbl_profile` (`full_name`, `address`, `contact`, `email`, `username`, `password`, `user_type`, `date`) values(:full_name, :address, :contact, :email, :username, :password, :userType, CURRENT_TIMESTAMP)");

        $BrandInsert->bindParam(':full_name', $full_name);
        $BrandInsert->bindParam(':address', $address);
        $BrandInsert->bindParam(':contact', $contact);
        $BrandInsert->bindParam(':email', $email);
        $BrandInsert->bindParam(':username', $username);
        $BrandInsert->bindParam(':password', $password);
        $BrandInsert->bindParam(':userType', $usertype);

        return $BrandInsert->execute() ? true : false;
    }

    public function login($username, $password, $usertype) {
        
        $statement = "SELECT * FROM tbl_profile WHERE username = :username AND password = :password AND user_type = :userType";
        $findUser = $this->conn->prepare($statement);
        $findUser->bindParam(':username', $username);
        $findUser->bindParam(':password', $password);
        $findUser->bindParam(':userType', $usertype);
        
        if ($findUser->execute()) {
            if ($findUser->rowCount()>0) {
                if ($usertype == 'admin') {
                    $details = $findUser->fetch();
                    $_SESSION['admin']['username'] = $details['username'];
                    //$_SESSION['admin']['userType'] = $details['user_type'];
                    $_SESSION['admin']['id'] = $details['pro_id'];
//                    echo $_SESSION['admin']['username'];
//                    echo $_SESSION['admin']['id'];
                    return true;
                } else {
                    //echo 'User exist.';
                    $details = $findUser->fetch();
                    $_SESSION['user']['username'] = $details['username'];
                    //$_SESSION['user']['userType'] = $details['user_type'];
                    $_SESSION['user']['id'] = $details['pro_id'];
//                    echo $_SESSION['user']['username'];
//                    echo $_SESSION['user']['id'];
                    return true;
                }
            }            
        }
        return false;
    }
    
    public function countUsers() {
        $countUsers  = $this->conn->prepare('SELECT COUNT(*) FROM tbl_profile;');
        if ($countUsers->execute()) {
            $count = $countUsers->fetch();
            return $count['COUNT(*)'];
        }
        return false;
    }
    
    public function checkUsername($uname) {
        $countUser  = $this->conn->prepare("SELECT COUNT(*) FROM tbl_profile WHERE username='" . $uname . "';");
        if ($countUser->execute()) {
            $count = $countUser->fetch();
            return $count['COUNT(*)'];
        }
        return false;
    }
    
    public function viewAllUsers() {
        $AllUsers = $this->conn->prepare('SELECT * FROM db_accounting.tbl_profile ORDER BY date DESC;');
        return $AllUsers->execute() ? $AllUsers->fetchAll() : false;
    }
}
