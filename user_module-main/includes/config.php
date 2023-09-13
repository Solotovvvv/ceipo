<?php 
//connection of database


$server="localhost";
$user="root";		
$pass="";		
$dbname="buds";


$conn= new mysqli($server,$user,$pass,$dbname);
if($conn->connect_error){
	die('Connection Failed'.$conn->connect_error);
}

class Database {
    private static $host = "localhost";
    private static $dbname = "buds";
    private static $user = "root";
    private static $pass = "";
    // private static $host = "localhost";
    // private static $dbname = "ucc_admission";
    // private static $user = "ucc_admin";
    // private static $pass = "e0pgATND&fj{";





    public static function connection()
    {
        try {
            date_default_timezone_set('Asia/Manila');
            $pdo = new PDO('mysql:host='. self::$host .';dbname='.self::$dbname, self::$user, self::$pass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
?>