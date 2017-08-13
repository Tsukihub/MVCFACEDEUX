<?php

namespace App\Controller;

use Core\Controller\Controller;

class NoticesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Notice');
       

    }

    public function index(){
        $notices = $this->Notice->all();
        $this->render('notices.index', compact('notices'));
    }

}