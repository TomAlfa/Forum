<?php
/**
 * Created by PhpStorm.
 * User: Silverhawk
 * Date: 8-5-2017
 */
$servername = "localhost";
$username = "Tom";
$password = "%Hoogkerk1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

try{
    $select->bindParam(":user", $data, PDO::PARAM_STR);
    $select->execute();
    $result = $select->fetchAll();

    echo  "ID \t User \t Wachtwoord";
    foreach ($result as $item) {
        echo"<li>{$item['id']} {$item['user']} {$item['wachtwoord']}</li>";
    }
    
//print_r(PDO::getAvailableDrivers());
//
////Database forum, tabel users, User Tom, ww %Hoogkerk1//
//$dbHost="localhost";
//$dbName="forum";
//$User="Tom";
//$Wachtwoord="%Hoogkerk1";
//
//try{
//    $conn = new PDO("mysql:host=$servername;dbName=$dbName", $username, $passwo);
//    $conn ->setAttribute(PDO::ATTR_ERRMODE,
//        PDO::ERRMODE_EXCEPTION);
//    echo "<br>verbinding gemaakt!<br>";
//}
//
//catch(PDOException $e){
//    $message = $e ->getMessage();
//    echo $message;
//}
//
//$query = "INSERT INTO users (User, Wachtwoord) VALUES (?,?)";
//$insert = $conn -> prepare($query);
//$data = array("Tom", "%Hoogkerk1");
//
////try{
////    $insert -> execute($data);
////    echo"Gebruiker aangemaakt";
////}
////catch (PDOException $e){
////    echo $e ->getMessage();
////    echo "Gebruiker niet aangemaakt";
////}
//
//$query = "SELECT * FROM users WHERE User = :user";
//$data = "users";
//$select = $conn -> prepare($query);
//

//}
//
//catch(PDOException $e){
//    $message = $e ->getMessage();
//    echo $message;
//}
////try{
////    // bindparam moet by referenxe dus via variabele
////    // alternatief is $select->bindValue("user","testuser", PDO::PARAM_STR);
////    $select->bindParam(":user", $data);
////}
////$select -> execute($data);
////$select -> setFetchMode(PDO::FETCH_ASSOC);
////var_dump($select);
?>