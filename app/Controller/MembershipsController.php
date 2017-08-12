<?php

namespace App\Controller;

use Core\Controller\Controller;

class MembershipsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Membership');
       

    }

    public function index(){
        $membership = $this->Membership->all();
         $this->render('memberships.index', compact('membership'));
    }


}