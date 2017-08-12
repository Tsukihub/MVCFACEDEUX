<?php

namespace App\Controller;

use Core\Controller\Controller;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Category');

    }

    public function index(){
        $posts = $this->Post->last();
        $category = $this->Category->categoryRelativeTo();
        $this->render('posts.index', compact('posts'), 'actions.index.side', compact('category'));
    }

    public function category(){
        $categorie = $this->Category->find($_GET['category']);
        if($categorie === false){
            $this->notFound();
        }
        $articles = $this->Post->findCategory($_GET['category']);
        // $articles = $this->Post->lastByCategory($_GET['category']);
        $category = $this->Category->categoryRelativeTo();
        $this->render('posts.category', compact('articles', 'categorie'), 'actions.index.side', compact('category'));
    }

    public function show(){
        $categorie = $this->Category->find($_GET['category']);
        $article = $this->Post->findWithCategory($_GET['id']);
        $this->render('posts.show', compact('article', 'categorie'));
    }

}