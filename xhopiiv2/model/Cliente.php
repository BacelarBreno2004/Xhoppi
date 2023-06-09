<?php

class Cliente{
    protected $nome;
    protected $sobrenome;
    protected $datanasc;
    protected $telefone;
    protected $cpf;
    protected $email;
    protected $senha;

    //Construtor
    public function __construct($Nome,$Sobrenome,$Datanasc,$Telefone,$CPF,$Email, $Senha)
    {
        $this->nome = $Nome;
        $this->sobreNome = $Sobrenome;
        $this->dataNasc = $Datanasc;
        $this->telefone = $Telefone;
        $this->cpf = $CPF;
        $this->email = $Email;
        $this->senha = $Senha;
    }

    //Getter e Setter
    public function get_Nome(){
        return($this->nome);
    }

    public function set_Nome($Nome){
        $this->nome = $Nome;
    }

    public function get_Sobrenome(){
        return($this->sobrenome);
    }

    public function set_Sobrenome($Sobrenome){
        $this->sobrenome = $Sobrenome;
    }

    public function get_datanasc(){
        return($this->datanasc);
    }

    public function set_datanasc($datanasc){
        $this->datanasc = $datanasc;
    }

    public function get_Telefofone(){
        return($this->telefone);
    }

    public function set_Telefone($Telefone){
        $this->telefone = $Telefone;
    }

    public function get_cpf(){
        return($this->cpf);
    }

    public function set_cpf($CPF){
        $this->cpf = $CPF;
    }

    public function get_email(){
        return($this->email);
    }

    public function set_email($Email){
        $this->email = $Email;
    }

    public function get_senha(){
        return($this->senha);
    }

    public function set_senha($Senha){
        $this->senha = $Senha;
    }
    //Métodos
  
}

?>