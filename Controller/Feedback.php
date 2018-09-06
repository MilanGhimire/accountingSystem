<?php
include_once 'call.php';

class Feedback {
    
    public $conn = null;

    public function __construct() {
        $con = new DbConnection();
        $this->conn = $con->getConnections();
    }
    
    public function addFeedback($full_name, $email, $message) {
        
        $AppintmentInsert = $this->conn->prepare("INSERT INTO `db_accounting`.`tbl_feedback` (`feed_name`, `feed_email`, `feed_message`,`feed_date`) VALUES (:feedName, :feedEmail, :feedMessage, CURRENT_TIMESTAMP)");

        $AppintmentInsert->bindParam(':feedName', $full_name);
        $AppintmentInsert->bindParam(':feedEmail', $email);
        $AppintmentInsert->bindParam(':feedMessage', $message);

        return $AppintmentInsert->execute() ? true : false;
    }
    
    public function countFeedback() {
        $countFeedbacks = $this->conn->prepare('SELECT COUNT(*) FROM `db_accounting`.`tbl_feedback`;');
        if ($countFeedbacks->execute()) {
            $count = $countFeedbacks->fetch();
            return $count['COUNT(*)'];
        }
        return false;
    }
    
    public function viewAllFeedback() {
        $AllFeedbacks = $this->conn->prepare('SELECT * FROM `db_accounting`.`tbl_feedback` ORDER BY feed_date DESC;');
        return $AllFeedbacks->execute() ? $AllFeedbacks->fetchAll() : false;
    }
}