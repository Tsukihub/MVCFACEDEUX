<?php
namespace App\Entity;

use Core\Entity\Entity;

class ActionEntity extends Entity{
	 public function getUrl(){
        return 'index.php?p=actions.show&id=' . $this->id.'&category=' . $this->actions_category_id;
    }
     public function getExtrait(){
        $html = '<p>' . substr($this->content, 0, 100) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }
    public function getActions_img(){
    	return '';
    }

}