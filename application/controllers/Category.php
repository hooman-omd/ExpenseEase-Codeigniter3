<?php

class Category extends BaseController{
    public function index(){
        $this->twig->render('dashboard.twig');
    }
}