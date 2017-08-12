<?php

namespace App\Controller;

use Core\Controller\Controller;

class NewsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('News');
       

    }

    public function index(){
        $news = $this->News->last();
        $this->render('news.index', compact('news'));
    }

}