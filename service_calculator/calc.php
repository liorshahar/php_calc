<?php

include_once 'controller.php';

class Calc extends Controller{


    public function setNumbers($numArray){
        $this->model->setNumbers($numArray);
    }
        
    public function add(){
        $numArray = $this->model->getNumbers();
        $this->model->setRetVal(array_sum($numArray));
    }

    public function mult(){
        $numArray = $this->model->getNumbers();
        $this->model->setRetVal($numArray[0] * $numArray[1] * $numArray[2]);
    }

    public function avg(){
        $numArray = $this->model->getNumbers();
        $this->model->setRetVal(array_sum($numArray)/3);
    }

    public function getRetVal(){
        return $this->model->getRetVal();
    }
}



        
