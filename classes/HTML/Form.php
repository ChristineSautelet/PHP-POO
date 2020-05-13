<?php

namespace ChrisS\HTML;

class Form{
    

    
    private $data=array();    

    
    public $surroundtable='table';
    

    public function __construct($data=array()){
        $this->data=$data;
    }
    

    protected function surroundtable($html){
        return "<{$this->surroundtable}>{$html}</{$this->surroundtable}>";

    }
    

    protected function getValue($index){

        return isset($this->data[$index]) ? $this->data[$index] : null;

    }
    

    public function input($name){
        echo $this->surroundtable('<tr><th><label>'.ucfirst($name).'</label></th>'.'<th><input type="text" name="' .$name. '" value="'. $this->getValue($name) .'"></th></tr>')
        ;
    
    }

    public function select($name, $options = []){
        $svalue="";
        foreach ($options as $option) {    
            $svalue=$svalue.'<option value="'.$option.'">'.$option.'</option>';}

        echo $this->surroundtable('<tr><th><label for="'.$name.'">'.ucfirst($name).'</label></th>'
        .'<th><select name="'.$name.'">'.$svalue.'</select></th></tr>');
  
    }


    public function textarea($name, $cols = 1, $rows = 5) {
        echo $this->surroundtable('<tr><th><label for="'.$name.'">'.ucfirst($name).'</label></th>'
        .'<th><textarea name="' . $name . '" cols="' . $cols . '" rows="' . $rows . '">' . $this->getValue($name) .'</textarea></th></tr>');
    }

    public function radio($name, $values = []) {
        $rvalue="";
        foreach ($values as $value) {
            $rvalue= $rvalue."<tr><th><label for='" . $name . "'>" . ucfirst($value) . "</label></th><th><input type='radio' name='" . $name ."' value='" . $value . "'></th>
            </tr>";
      }
        echo $this->surroundtable($rvalue);
              
    }

    public function checkbox($name, $values = []) {
        $cbvalue="";
        foreach ($values as $value) {
              $cbvalue=$cbvalue."<tr><th><label for='" . $name . "'>" . ucfirst($value) . "</label></th><th><input type='checkbox' name='" . $name ."' value='" . $value . "'></th>
              </tr>";
        }
        echo $this->surroundtable($cbvalue);                
    }



    public function submit(){
        echo $this->surroundtable('<tr><th></th><th><button type="submit">Submit</button></th></tr>');

    }

}