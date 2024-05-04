<?php

//the main root  of  all controllers
class Controller
{
    //crete a view method
    public function view($view,$data = []): void
    {
        require_once '../app/views/' . $view . '.php';
    }
}