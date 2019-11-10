<?php
include ('setup.php');
//creating db starts here////////////////////////////////////////////////////
    try {
        $conn = new PDO("mysql:host=$servername", $root, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("CREATE DATABASE IF NOT EXISTS`$db`;");
    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
        
    }
$conn = NULL;
//creating db ends here//////////////////////////////////////////////////////

//you dont one this line 16 to line 26
//connecting to created db//////////////////////////////////////////////////
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $root, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully";
}
catch(PDOException $e)
{
    echo "connection error: " . $e;
}
/////////////////////////////////////////////////////////////////////////////


//create table///////////////////////////////////////////////////////////////
$sql = "CREATE TABLE IF NOT EXISTS $db.users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(30),
    passwd VARCHAR(100) NOT NULL, 
    `link` VARCHAR(50) NOT NULL , 
    `verified` TINYINT(1) NULL DEFAULT 0)";

$conn->exec($sql);

/////////////////////////////////////////////////////////////////////////////
?>
