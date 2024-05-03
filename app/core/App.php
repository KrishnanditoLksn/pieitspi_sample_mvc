<?php

class App
{
    /*
     set default controller
     */
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->urlParsing();
        /*
            find if file was named Home
         */
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            /*
            overwrite old controller
             */
            $this->controller = $url[0];
            unset($url[0]);
        }
        //call controller
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //controller method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                /*
                overwrite controller
                 */
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //manage the params
        if (!empty($url)) {
            //get data
            $this->params = array_values($url);
        }

        //run controll and method , and send params if exists
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    //get and filter url
    public function urlParsing(): array|string
    {
        if (isset($_GET['url'])) {
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
        return "";
    }
}