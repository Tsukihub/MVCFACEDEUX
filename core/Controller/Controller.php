<?php

namespace Core\Controller;

class Controller{

    protected $viewPath;
    protected $template;

    // protected function render($view, $variables = []){
    //     ob_start();
    //     extract($variables);
    //     require($this->viewPath . str_replace('.', '/', $view) . '.php');
    //     $content = ob_get_clean();
    //     require($this->viewPath . 'templates/' . $this->template . '.php');
    // }
    protected function render($mainview, $mainvariables = [], $sideview ='', $sidevariables = []){
        ob_start();
        extract($mainvariables);
        require($this->viewPath . str_replace('.', '/', $mainview) . '.php');
        $content = ob_get_clean();
        $sidecontent= '';
        if ($sideview !==''){
        ob_start();
        extract($sidevariables);
        require($this->viewPath . str_replace('.', '/', $sideview) . '.php');
        $sidecontent = ob_get_clean();
    }
        require($this->viewPath . 'templates/' . $this->template . '.php');


    }
    protected function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Acces interdit');
    }

    protected function notFound(){
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }

}
