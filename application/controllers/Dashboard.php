<?php

class Dashboard extends BaseController{
    private $categoryModel;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->categoryModel = $this->Category_model;
    }

    public function index(){
        $data['categories'] = $this->categoryModel->getCategories();
        $this->twig->render('dashboard.twig',$data);
    }
}