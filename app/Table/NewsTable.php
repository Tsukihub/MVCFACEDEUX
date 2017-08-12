<?php
namespace App\Table;

use Core\Table\Table;

class NewsTable extends Table{

    protected $table = 'news';

    /**
     * Récupère les derniers article
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT *, DATE_FORMAT(newsdate,'%d/%m/%Y') AS newsdatefr
            FROM news 
            ORDER BY newsdate DESC");
    }

}