<?php

namespace App\Controller;

use Core\Controller\Controller;

class PresentationsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Presentation');
       

    }

    public function index(){
        $presentations = $this->Presentation->all();
         $this->render('presentation.index', compact('presentations'));
    }


}