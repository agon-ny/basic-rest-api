<?php

    namespace App\Kernel;
    use App\Controllers\UserController;

    class Init
    {

        public function __construct()
        {
            $url = $_GET['url'];
            if ($url) {
                $url = explode('/', $url);
                $controller = "App\Controllers\\".ucfirst($url[0])."Controller";
                $method = strtolower($_SERVER['REQUEST_METHOD']);
                array_shift($url);
                try {
                    $data = call_user_func_array(array(new $controller, $method), $url);
                    $response = json_encode(["response" => "Success", "data" => $data]);
                    echo $response;
                } catch(\Exception $e) {
                    $response = json_encode(["response" => "Error", "message" => "Something went wrong while proccessing your request :( "]);
                    echo $response;
                }

            } else {
                include('README.md');
            }
        }

    }
