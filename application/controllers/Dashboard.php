<?php

class Dashboard extends BaseController{
    private $categoryModel;
    private $transactionModel;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->categoryModel = $this->Category_model;
        $this->load->model('Transaction_model');
        $this->transactionModel = $this->Transaction_model;
    }

    public function index(){
        $sum = $this->transactionModel->getSum();
        $data['income'] = $sum['income']->amount ?? 0;
        $data['expense'] = $sum['expense']->amount ?? 0;
        $data['remain'] = $sum['income']->amount - $sum['expense']->amount;

        $data['categories'] = $this->categoryModel->getCategories();
        $data['transactions'] = $this->transactionModel->getLastThree();
        $this->twig->render('dashboard.twig',$data);
    }
}