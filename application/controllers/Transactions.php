<?php

class Transactions extends BaseController{
    public function index(){
        $this->twig->render('dashboard.twig');
    }
}