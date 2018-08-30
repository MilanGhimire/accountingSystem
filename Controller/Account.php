<?php
include_once ('DbConnection.php');
session_start();

//test comment

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

        $BrandInsert = $this->conn->prepare("INSERT INTO tbl_profile values(NULL, :full_name, :address, :contact, :email, :username, :password, :userType)");

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
}
