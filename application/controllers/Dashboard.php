<?php

class Dashboard extends BaseController{
    public function index(){
        $this->twig->render('dashboard.twig');
    }
}