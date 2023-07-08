<?php 

class Features extends Controller{

    public function index($nome = '')
    {

            $user = $this->model('User');
            $user->nome = $nome;
            
            $this->view('main/header', ['nome'=>$user->nome]);
            $this->view('features/index', ['titolo' => 'features page', 'message' => 'Messaggio personalizzato', 'lista' => ['prop1' => 'value1', 'prop2' => 'value2']]);
            $this->view('main/footer', ['nome'=>$user->nome]);

    }
}