<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use Core\HTML\Upload;

class ActionsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Action');
        
 
    }


    public function index(){
        $actions = $this->Action->all();
        $this->render('admin.actions.index', compact('actions'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Action->create([
                'title' => $_POST['title'],
                'accroche' => $_POST['accroche'],
                'content' => $_POST['content'],
                'actions_category_id' => $_POST['actions_category_id'],
                'actions_img_name' => $_POST['actions_img_name']

            ]);
            if($result){
                return $this->index();
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->extractIfCategoryRelativeTo('id', 'titre');
        $form = new BootstrapForm($_POST);
        $this->render('admin.actions.edit.main', compact('categories', 'form'));
    }

    public function edit(){
        if (!empty($_POST)) {
   
            $result = $this->Action->update($_GET['id'], [
                'title' => $_POST['title'],
                'accroche' => $_POST['accroche'],
                'content' => $_POST['content'],
                'actions_img_name' => $_POST['actions_img_name'],
                'actions_category_id' => $_POST['actions_category_id']
            ]);
        
            if($result){
                // return $this->index();
            }
        }

        $upload ="";
        if(isset($_FILES["actions_img"])){
           $upload = new Upload($_FILES["actions_img"]);
           $upload->Process(ROOT."/public/img/actions");
           print_r($_FILES);
           if ($upload->processed) {
           echo 'original image copied';
           } else {
           echo 'error : ' . $upload->error;
           }

        }


        $post = $this->Action->find($_GET['id']);
        $this->loadModel('Category');
        $actions = $this->Action->all();
        $this->loadModel('Img_path');
        $path = $this->Img_path->findPath();
        $categories = $this->Category->extractIfCategoryRelativeTo('id', 'titre');
        $form = new BootstrapForm($post);
        $formulaire = new BootstrapForm();
        $files = array_slice(scandir('../public/img/actions'), 2);
        $this->render('admin.actions.edit.main', compact('categories', 'form', 'formulaire', 'path', 'upload', 'uploaddestname'), 'admin.actions.edit.side', compact('post', 'actions', 'path','files', 'formulaire'));



        //
        // $action = $this->Action->find($_GET['id']);
        // $this->render('admin.actions.index.main', compact('actions'), 'admin.actions.index.side', compact('action', 'actions', 'path'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Action->delete($_POST['id']);
            return $this->index();
        }
    }
}
