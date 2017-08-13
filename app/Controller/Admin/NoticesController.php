<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class NoticesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Notice');
    }

    public function index(){
        $notices = $this->Notice->all();
        $this->render('admin.notices.index', compact('notices'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Notice->create([
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ]);
            if($result){
                return $this->index();
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.notices.edit', compact('form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Notice->update($_GET['id'], [
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ]);
            if($result){
                return $this->index();
            }
        }
        $Notice = $this->Notice->find($_GET['id']);
        $form = new BootstrapForm($Notice);
        $this->render('admin.notices.edit', compact('form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Notice->delete($_POST['id']);
            return $this->index();
        }
    }

}