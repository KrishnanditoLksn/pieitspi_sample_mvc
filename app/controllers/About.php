<?php

class About extends Controller
{
    //if about  doesn't have a params ,  it will redirect to Index
    public function index($name = 'anon', $job = 'jobless')
    {
        //send datas to Controller
        $data['name'] = $name;
        $data['job'] = $job;
        //send About title to Controller and index
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }

    public function page()
    {
        //send Pages title to Controller and page
        $data['title'] = 'About';
        $this->view('templates/header' , $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}