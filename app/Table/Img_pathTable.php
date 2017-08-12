<?php
namespace App\Table;

use Core\Table\Table;

class Img_pathTable extends Table{

    protected $table = "img_paths";
	public function findPath(){
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
		return $this->query("SELECT img_paths.img_path FROM {$this->table} WHERE img_page = ?", [$contentType], true);
}


}