<?php
include_once 'config.php';;

class DbConnection
{
    public function getConnections() {
      $server = SERVER;
      $db = DB;
      $conn = null;
      try {
        $conn = new PDO("mysql:host=$server;dbname=$db", USER, PASS);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected";
      }
      catch(PDOException $e)
      {
        echo  $e->getMessage();
      }
      return $conn;
    }
}
