<?php
    
    include_once 'model.php';

    class Controller{
        
       protected $model;
        
        public function __construct($model){
            
            $this->model = $model;
            
        }
    }
?>
