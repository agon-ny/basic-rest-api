<?php

    namespace App\Models;

    class User 
    {

        public static function all() {
            $pdo = new \PDO(DRIVER.":host=".HOST.";dbname=".DBNAME, DBUSER, DBPASSWORD);

            $sql = $pdo->prepare(" SELECT * FROM `users` ");
            $sql->execute();
            $data = $sql->fetchAll();

            if (count($data) == 0) {
                $data = ["noResults"];
            }

            return $data;
        }

        public static function find($id) {
            $pdo = new \PDO(DRIVER.":host=".HOST.";dbname=".DBNAME, DBUSER, DBPASSWORD);

            $sql = $pdo->prepare(" SELECT * FROM `users` WHERE `id` = ? ");
            $sql->execute(array($id));
            $data = $sql->fetchAll();

            if (count($data) == 0) {
                $data = ["noResults"];
            }

            return $data;
        }

    }