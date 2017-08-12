<?php
namespace Core\HTML;
class BootstrapForm extends Form{

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    }

    /**
     * @param $name string
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = [], $getGet = false){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label>' . $label . '</label>';
        if($getGet){
            $fieldvalue = $getGet;
        }else{
            $fieldvalue = $this->getValue($name);
        }
        if($type === 'textarea'){
            $input = '<textarea class ='.$name.' name="' . $name . '" class="form-control">' . $fieldvalue . '</textarea>';
        }else{
            $input = '<input class ='.$name.' type="' . $type . '" name="' . $name . '" value="' . $fieldvalue . '" class="form-control">';
        }
        return $this->surround($label . $input);
    }

    public function select($name, $label, $options){
        $label = '<label class="'.$name.'">' . $label . '</label>';
        $input = '<select class="'.$name.'" name="' . $name . '">';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }
            $input .= "<option value='$k'$attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surround($label . $input);
    }


    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}