<?php

class About
{
    //if about  doesn't have a params ,  it will redirect to Index
    public function index($name = 'anon', $job = 'jobless')
    {
        echo "Hello $name , I have a $job <br> !!!";
    }

    public function page()
    {
        echo 'About/page';
    }
}