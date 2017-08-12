<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class NewsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('News');
    }

    public function index(){
        $news = $this->News->all();
        $this->render('admin.news.index', compact('news'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->News->create([
                'title' => $_POST['title'],
                'newsdate' => $_POST['newsdate'],
                'link' => $_POST['link'],
                'fromwhere' => $_POST['fromwhere']
            ]);
            if($result){
                return $this->index();
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.news.edit', compact('form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->News->update($_GET['id'], [
                'title' => $_POST['title'],
                'newsdate' => $_POST['newsdate'],
                'link' => $_POST['link'],
                'fromwhere' => $_POST['fromwhere']
            ]);
            if($result){
                return $this->index();
            }
        }
        $news = $this->News->find($_GET['id']);
        $this->loadModel('Category');
        $form = new BootstrapForm($news);
        $this->render('admin.news.edit', compact('form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->News->delete($_POST['id']);
            return $this->index();
        }
    }

}