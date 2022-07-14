<?php

    namespace App\Controllers;

    use App\Models\User;

    class UserController
    {

        public function get($id = null) {
            if($id == null){
                return User::all();
            } else {
                return User::find($id);
            }
        }

        public function post() {
            
        }

        public function update() {
            
        }

        public function delete() {
            
        }

    }