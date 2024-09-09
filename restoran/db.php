<?php
    class DB{
        //properti
        public $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran";

        public function __construct()
        {
            echo "construct";
        }
        //methods
        public function selectData()
        {
            echo ' Select Data';
        }

        public function getDataBase() {
            echo $this->database;
        }

        public static function insertData() {
            echo "static function";
        }
    }

    DB::insertData();

    $db = new DB;
    echo "<br>";
    $db->selectData();
    echo "<br>";

    echo $db->host;

    echo "<br>";

    $db->getDataBase();

?>