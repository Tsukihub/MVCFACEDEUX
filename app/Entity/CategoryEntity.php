<?php
namespace App\Entity;

use Core\Entity\Entity;

class CategoryEntity extends Entity{

    public function getUrl(){
    	if(isset($_GET['p'])){
	    $contentType = $_GET['p'];
		$contentType = explode('.', $contentType);
			if($contentType[0] == 'admin'){
		    $contentType = $contentType[1];
			} else{
		    $contentType = $contentType[0];
			}
		}else{
			$contentType = "posts";
		}
        return "index.php?p=".$contentType.".category&category=" . $this->id;
    }


}