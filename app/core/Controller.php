<?php 

class Controller{

    protected function model($model)
    {
        require_once '../app/models/' .  $model . '.php';
        return new $model();
    }

    protected function dao($dao)
    {
        require_once '../app/dao/' .  $dao . '.php';
        return new $dao();
    }
    
    public function view($view, $data = [])
    {
        require_once '../app/views/' .  $view . '.php';
        
    }

}