<?php

class Home extends Controller
{
    public function index()
    {
        //using model syntax ( $data['data] = $this->model('ModelExample')->get(); )
        return $this->view('home');
    }
}