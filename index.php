<?php

    use App\Controllers\UserController;

    require_once 'vendor/autoload.php';


    function init() {
        $url = $_GET['url'];
        if ($url) {
            $url = explode('/', $url);
            $controller = "App\Controllers\\".ucfirst($url[0])."Controller";
            $method = strtolower($_SERVER['REQUEST_METHOD']);
            array_shift($url);
            try {
                echo json_encode(call_user_func_array(array(new $controller, $method), $url));
            } catch(\Exception $e) {

            }

            // $userController = new UserController();
            // echo json_encode($userController->get());

        } else {
            echo 'API SERVICE';
        }
    }

    init();