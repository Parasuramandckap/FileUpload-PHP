<?php
session_start();
class Database
{
    public $db;

    public function __construct()
    {
        try{
            $this->db = new PDO
            (
                'mysql:host=localhost;dbname=file_upload',
                'admin',
                'welcome'
            );
//            echo "ok";
        }
        catch(Exception $e){
            die("connection error");
        }
    }

    public function query($query)
    {
        $statement = $this->db->prepare($query);
        $statement->execute($statement);

        return $statement;
    }
}
