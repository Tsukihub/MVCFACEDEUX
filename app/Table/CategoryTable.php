<?php
namespace App\Table;

use Core\Table\Table;

class CategoryTable extends Table{

    protected $table = "categories";

public function categoryRelativeTo(){
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
	        return $this->query("
            SELECT *
            FROM categories
            WHERE categories.contentType = ?", [$contentType]);
}
    public function findcategory($id){
        return $this->query("SELECT * FROM {$this->table} WHERE actions_category_id = ?", [$id], true);
    }

        public function extractIfCategoryRelativeTo($key, $value){
        $records = $this->categoryRelativeTo();
        $return = [];
        foreach($records as $v){
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }
    
            public function extractfromtwotables($key, $value){
        $records = $this->query("
            SELECT pageforcategories.nametoshow, pageforcategories.pagename
            FROM pageforcategories");
        $return = [];
        foreach($records as $v){
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }

    public function canisuppress(){
        $records = $this->query("
            SELECT categories.id, categories.titre as category, categories.titre, articles.titre, actions.title
            FROM categories
            LEFT JOIN articles ON categories.id= articles.articles_category_id
            LEFT JOIN actions ON categories.id=actions.actions_category_id");
        $isunused=[];
        $i=0;
        foreach ($records as $record) {
            if ($record->titre=='' && $record->title==''){
                $isunused[$i]=$record->category;
                 $i++;
            }
           
        }
        return $isunused;
    }














}