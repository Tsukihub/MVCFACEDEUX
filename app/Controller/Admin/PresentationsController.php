<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class PresentationsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Presentation');
    }

    public function index(){
        $Presentations = $this->Presentation->all();
        $this->render('admin.Presentations.index', compact('Presentations'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Presentation->create([
                'title' => $_POST['title'],
                'content' => $_POST['content']
                ]);
            if($result){
                return $this->index();
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.Presentations.edit', compact('form'));
    }

    public function edit(){
        if (!empty($_POST)) {([
          'title' => $_POST['title'],
          'content' => $_POST['content']
          ]);
if($result){
    return $this->index();
}
}
$Presentations = $this->Presentation->find($_GET['id']);
$form = new BootstrapForm($Presentations);
$this->render('admin.Presentations.edit', compact('form'));
}

public function delete(){
    if (!empty($_POST)) {
        $result = $this->Presentation->delete($_POST['id']);
        return $this->index();
    }
}

}