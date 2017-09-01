<?php

namespace App\Controller\Admin;

use Core\HTML\Upload;
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
public function partenaires(){



      $upload ="";
        if(isset($_FILES["partenaire_img"])){
           $upload = new Upload($_FILES["partenaire_img"]);
           $upload->Process("img/partenaires");
           print_r($_FILES);
           if ($upload->processed) {
           echo 'original image copied';
           } else {
           echo 'error : ' . $upload->error;
           }


}

     $formulaire = new BootstrapForm();
     $files = array_slice(scandir('img/partenaires'), 2);
     $this->render('admin.Presentations.partenaires', compact('files', 'formulaire'));

}

public function erase(){
    if (isset($_GET['name'])){
    echo ($_GET['name']);
    $_GET['name'] = str_replace(' ', '\\', $_GET['name']);
    $path="img/partenaires/$_GET['name']"
    // fclose($path);
    // unlink($path);
    return $this->partenaires();

}
}
}