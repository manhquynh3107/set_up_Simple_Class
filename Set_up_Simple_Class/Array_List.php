<?php

class ArrayList{
    public $arraylist;
    public function __construct($arr=""){
        if (is_array($arr) == true){
            $this->$arrlist = $arr;
        }else{
            $this->arraylist = array();
        }
}
public function add($obj){
        array_push($this->arraylist,$obj);
}

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

public function isInteger($toCheck){
        return preg_match("/^[0-9]+$/", $toCheck);
}
}