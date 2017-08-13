<?php
namespace Core\Table;

use Core\Database\Database;

class Table
{

    protected $table;
    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name)) . 's';
        }
    }

    public function all(){
        return $this->query('SELECT * FROM ' . $this->table);
    }

    public function find($id){
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }


  
    public function findcategory($id){
        return $this->query("SELECT * FROM {$this->table} WHERE {$this->table}_category_id = ?", [$id]);
    }

    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(', ', $sql_parts);

        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id = ?", $attributes, true);
    }


    public function delete($id){
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id], true);
    }

    public function create($fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ', $sql_parts);
        return $this->query("INSERT INTO {$this->table} SET $sql_part", $attributes, true);
    }

    public function extract($key, $value){
        $records = $this->all();
        $return = [];
        foreach($records as $v){
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }

    public function query($statement, $attributes = null, $one = false){
        if($attributes){
            return $this->db->prepare(
                $statement,
                $attributes,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        } else {
            return $this->db->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        }
    }



        public function uploadImg($array, $img, $way="/public/img"){
         if (isset($array, $img)) {
            $assoces= $this->create($array);
            $dir = ROOT .$way;
            $name= $img['name'];
            $taille_maxi = 100000;
            $taille = filesize($img['tmp_name']);
            $extensions = array('.png', '.gif', '.jpg', '.jpeg');
            $extension = strrchr($img['name'], '.');
            //Début des vérifications de sécurité...
                if(in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
                {
                    if($taille<$taille_maxi){
                         if (!move_uploaded_file($img['tmp_name'], "$dir/$name")) {
                            echo 'ERROR';
                        }else{
                            echo "C'est bon !";
                        }
                    }
                }
            }
    }




public function upload($way='public/img'){
    $dir = ROOT.$way;
    echo ($dir);
    // Check if the form was submitted


    if(isset($_FILES["img"]) && $_FILES["img"]["error"] == 0){

        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");

        $filename = $_FILES["img"]["name"];

        $filetype = $_FILES["img"]["type"];

        $filesize = $_FILES["img"]["size"];

    

        // Verify file extension

        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

    

        // Verify file size - 5MB maximum

        $maxsize = 5 * 1024 * 1024;

        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

    

        // Verify MYME type of the file

        if(in_array($filetype, $allowed)){

            // Check whether file exists before uploading it

            if(file_exists($dir.$_FILES["img"]["name"])){

                echo $_FILES["img"]["name"] . " is already exists.";

            } else{

                move_uploaded_file($_FILES["img"]["tmp_name"], $dir."/" . $_FILES["img"]["name"]);

                echo "Your file was uploaded successfully.";

            } 

        } else{

            echo "Error: There was a problem uploading your file. Please try again."; 

        }

    } else{

        echo "Error: " . $_FILES["img"]["error"];

    }

}





}
