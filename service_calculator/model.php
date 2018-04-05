<?php

class Model{

    protected $num1;
    protected $num2;
    protected $num3;
    protected $retVal;

    public function setNumbers($array){

        $this->num1 = $array[0];
        $this->num2 = $array[1];
        $this->num3 = $array[2];
    }

    public function getNumbers(){
        return array($this->num1 , $this->num2 , $this->num3);
    }

    public function getRetVal(){
        return $this->retVal;

    }

    public function setRetVal($retVal){
        $this->retVal = $retVal;
    }


}

?>