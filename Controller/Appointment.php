<?php
include_once ('DbConnection.php');

class Appointment
{
    public $conn = null;
    function __construct()
    {
        //parent::DBConnection();
        $con = new DbConnection();
        $this->conn = $con -> getConnections();
    }

    public function addAppointment($full_name, $email, $date, $phoneNumber) {
        
        $AppintmentInsert = $this->conn->prepare("INSERT INTO `db_accounting`.`tbl_appointment` values(NULL, :full_name, :email, :date, :phoneNumber, '0')");

        $AppintmentInsert->bindParam(':full_name', $full_name);
        $AppintmentInsert->bindParam(':email', $email);
        $AppintmentInsert->bindParam(':date', $date);
        $AppintmentInsert->bindParam(':phoneNumber', $phoneNumber);

        return $AppintmentInsert->execute() ? true : false;
    }
    
    public function coundAppointments() {
        $CountAppointments = $this->conn->prepare('SELECT COUNT(*) FROM db_accounting.tbl_appointment;');
        
        if ($CountAppointments->execute()) {
            $count = $CountAppointments->fetch();
            return $count['COUNT(*)'];
        }
        return false;
    }

    public function viewAllAppointments() {
        $AllAppointments = $this->conn->prepare('SELECT * FROM db_accounting.tbl_appointment;');
        return $AllAppointments->execute() ? $AllAppointments->fetchAll() : false;
    }
    
    public function viewUnreadAppointment() {
        //code here
    }
}
