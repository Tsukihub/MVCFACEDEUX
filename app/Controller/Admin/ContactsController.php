<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class ContactsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Contact');
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Contact->update('1', [
                'address' => $_POST['address'],
                'cp' => $_POST['cp'],
                'contactIdentity' => $_POST['contactIdentity'],
                'contactNumber' => $_POST['contactNumber'],
                'contactMail' => $_POST['contactMail']
            ]);
 
        }
        $Contact=$this->Contact->find('1');
        $form = new BootstrapForm($Contact);
        $this->render('admin.contacts.edit', compact('form'));
    }

}