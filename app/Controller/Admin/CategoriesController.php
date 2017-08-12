<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class CategoriesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Category');
    }

    public function index(){
        $items = $this->Category->all();
        $icansuppress = $this->Category->canisuppress();
        $this->render('admin.categories.index', compact('items', 'icansuppress'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Category->create([
                'titre' => $_POST['titre'],
                 'contentType' => $_POST['contentType']
            ]);
            return $this->index();
        }
        $class="add";
        $form = new BootstrapForm($_POST);
          $select= $this->Category->extractfromtwotables('pagename', 'nametoshow');
        $this->render('admin.categories.edit', compact('form', 'select', 'class'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Category->update($_GET['id'], [
                'titre' => $_POST['titre'],
              
            ]);
            return $this->index();
        }
        $class='edit';
        $category = $this->Category->find($_GET['id']);
        $form = new BootstrapForm($category);
        $select= $this->Category->extractfromtwotables('pagename', 'nametoshow');
        $this->render('admin.categories.edit', compact('form', 'select', 'class'));
    }   

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Category->delete($_POST['id']);
            return $this->index();
        }
    }

}