<?php

    namespace App\Models;

    class User 
    {

        private static $table = 'users';

        public static function all() {
            $pdo = new \PDO(DRIVER.":host=".HOST.";dbname=".DBNAME, DBUSER, DBPASSWORD);

            $sql = $pdo->prepare(" SELECT * FROM `users` ");
            $sql->execute();
            $data = $sql->fetchAll();

            return $data;
        }

        public static function find($id) {
            $pdo = new \PDO(DRIVER.":host=".HOST.";dbname=".DBNAME, DBUSER, DBPASSWORD);

            $sql = $pdo->prepare(" SELECT * FROM `users` WHERE `id` = ? ");
            $sql->execute(array($id));
            $data = $sql->fetchAll();

            return $data;
        }

    }