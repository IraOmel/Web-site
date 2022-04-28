<?php

class ConnectBD
{
    private static $instance = null;
    private $connection;
    private $bd_info = array("host" => '127.0.0.1', "user" => 'root', "password" => 'password');
    private $name = 'data_base';

    private function __construct()
    {
        mysqli_report(MYSQLI_REPORT_OFF);
        $this->connection = @new mysqli($this->bd_info['host'], $this->bd_info['user'], $this->bd_info['password'],
            $this->name);
        if (($this->connection)->connect_error) {
            die("Connection failed: " . ($this->connection)->connect_error);
        }
    }

    public function getData()
    {
        $sql = "SELECT name, email FROM Users";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        return $this->connection;
    }

    private function __clone()
    {
//        Private clone method to prevent cloning of the instance of this class.
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new ConnectBD();
        }
        return self::$instance;
    }
}

$db = ConnectBD::getInstance();
$db2 = ConnectBD::getInstance();

//$db3 = clone $db;
if ($db === $db2) {
    echo "Singleton працює, both variables contain the same instance." . "<br>";
} else {
    echo "Singleton зазнав невдачі, variables contain different instances." . "<br>";
}
$db->getData();

