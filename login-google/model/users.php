<?php

class users {

    private $id;
    private $nome;
    private $email;
    private $user;
    private $senha;
    private $id_nivel_acesso;
    private $criacao;
    private $modificado;

    public function __construct() {
        
    }

    public function __set($propriedade, $valor) {
        $this->$propriedade = $valor;
    }

    public function __get($propriedade) {
        return $this->$propriedade;
    }

}

?>