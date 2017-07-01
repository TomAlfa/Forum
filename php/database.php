<?php
class database
{
    private static $conn;

    public function __construct()
    {
        $dbHost = 'localhost';
        $database = 'forum';
        $user = 'tom';
        $password = '%Hoogkerk1';

        try {
            self::$conn = new PDO("mysql:host=$dbHost;dbname=$database",$user, $password);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully<br />"; // will be removed at release
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function execute($query){
        $select = self::$conn->prepare($query);
        $select->execute();
        return $select->fetchALL();
    }
    public static function execute_without_fetch($query){
        $select = self::$conn->prepare($query);
        $select->execute();

    }

    public static function user($id){
        return self::execute("Select * From users Where id = '$id'");
    }
}
?>