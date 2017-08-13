<?php
namespace App\Controller;

use Core\Controller\Controller;




class ContactsController extends AppController{

    public function __construct(){
        parent::__construct();
   	   $this->loadModel('Contact');
      
       

    }
   public function index(){


   	   $contact = $this->Contact->all();
       $this->render('contact.index', compact('contact'));


 
   }    

}