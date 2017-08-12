<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class MembershipsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Membership');
    }

    public function index(){
        $Membership = $this->Membership->all();
        $this->render('admin.memberships.index', compact('Membership'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Membership->create([
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ]);
            if($result){
                return $this->index();
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.memberships.edit', compact('form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Membership->update($_GET['id'], [
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ]);
            if($result){
                return $this->index();
            }
        }
        $Membership = $this->Membership->find($_GET['id']);
        $form = new BootstrapForm($Membership);
        $this->render('admin.memberships.edit', compact('form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Membership->delete($_POST['id']);
            return $this->index();
        }
    }

}