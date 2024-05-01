<?php

class App
{
    public function __construct()
    {
        $url = $this->urlParsing();
        var_dump($url);
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