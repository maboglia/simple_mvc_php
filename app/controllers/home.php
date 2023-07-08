<?php 

class Home extends Controller{

    public function index($nome = '')
    {

            $user = $this->model('User');
            $user->nome = $nome;
            
            $this->view('main/header', ['nome'=>$user->nome]);
            $this->view('home/index', ['titolo' => 'home page', 'message' => '', 'lista' => ['prop1' => 'value1', 'prop2' => 'value2']]);
            $this->view('main/footer', ['nome'=>$user->nome]);

    }
}