<?php 

class Pricing extends Controller{

    public function index($nome = '')
    {

            $user = $this->model('User');
            $user->nome = $nome;
            
            $this->view('main/header', ['nome'=>$user->nome]);
            $this->view('home/index', ['nome'=>$user->nome]);
            $this->view('main/footer', ['nome'=>$user->nome]);

    }
}