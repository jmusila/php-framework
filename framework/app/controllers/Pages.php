<?php

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('pages/index');
    }

    public function about($id)
    {
        return $this->view('pages/about');
    }
}
