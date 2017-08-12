<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class ActionsController extends AppController{
    public function __construct(){
        parent::__construct();
        $this->loadModel('Action');
        $this->loadModel('Category');
        $this->loadModel('Img_path');
    }
    public function index(){

		$category= $this->Category->categoryRelativeTo();
        $actions = $this->Action->all();
   
        $this->render('actions.index.main', compact('actions'), 'actions.index.side', compact('category'));

    }
   public function show(){
        $actions = $this->Action->find($_GET['id']);
        $path = $this->Img_path->findPath();
        $categorie = $this->Category->find($_GET['category']);
        if($categorie === false){
            $this->notFound();
        }
        $category= $this->Category->categoryRelativeTo();
        $this->render('actions.show', compact('actions', 'categorie', 'path'), 'actions.index.side', compact('category'));
    }
   public function category(){
        $categorie = $this->Category->find($_GET['category']);
        if($categorie === false){
            $this->notFound();
        }
        $action = $this->Action->findCategory($_GET['category']);
        $category = $this->Category->categoryRelativeTo();
        $this->render('actions.category', compact('action','categorie'), 'actions.index.side', compact('category'));
    }


}