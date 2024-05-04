<?php


//make home extend controller
class Home extends Controller
{
    /*
    default parameter
     */
    public function index()
    {
        //address to view , and separated html page
        //send Home page to Controller and root index
        $data['title'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}