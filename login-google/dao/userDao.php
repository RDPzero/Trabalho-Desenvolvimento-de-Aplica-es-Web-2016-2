<?php

include '../persistence/ConnectionDB.php';

class Users {

    private $connection = null;
    public $tableName = 'users';

    public function __construct() {
        $this->connection = connectionDB::getInstance();
    }

    public function checkUser($oauth_provider, $oauth_uid, $fname, $lname, $email, $gender, $locale, $link, $picture) {
        try {
            $status = $this->connection->prepare("SELECT * FROM $this->tableName "
                    . "WHERE oauth_provider = '" . $oauth_provider . "' "
                    . "AND oauth_uid = '" . $oauth_uid . "'");

            $status->execute();

            $array = array();
            $array = $status->fetchAll();
            if (empty($array)) {
                $status = $this->connection->prepare("INSERT INTO $this->tableName "
                        . "SET oauth_provider = '" . $oauth_provider . "', "
                        . "oauth_uid = '" . $oauth_uid . "', "
                        . "fname = '" . $fname . "', "
                        . "lname = '" . $lname . "', "
                        . "email = '" . $email . "', "
                        . "gender = '" . $gender . "', "
                        . "locale = '" . $locale . "', "
                        . "picture = '" . $picture . "', "
                        . "gpluslink = '" . $link . "', "
                        . "created = '" . date("Y-m-d H:i:s") . "', "
                        . "modified = '" . date("Y-m-d H:i:s") . "'");
            $status->execute();
            $array = array();
            $array = $status->fetchAll();
            }
            else
            {
               $status = $this->connection->prepare("UPDATE $this->tableName "
                       . "SET oauth_provider = '" . $oauth_provider . 
                       "', oauth_uid = '" . $oauth_uid . 
                       "', fname = '" . $fname . 
                       "', lname = '" . $lname . 
                       "', email = '" . $email . 
                       "', gender = '" . $gender . 
                       "', locale = '" . $locale . 
                       "', picture = '" . $picture . 
                       "', gpluslink = '" . $link . 
                       "', modified = '" . date("Y-m-d H:i:s") . 
                       "' WHERE oauth_provider = '" . $oauth_provider . 
                       "' AND oauth_uid = '" . $oauth_uid . "'");
               
            $status->execute();
            $array = array();
            $array = $status->fetchAll(); 
            }
            $this->connection = null;
            return $array;
        } catch (PDOException $ex) {
            echo utf8_decode('Ocorreram erros ao buscar o usuário' . $e);
        }

        return $array;
    }

}
?>