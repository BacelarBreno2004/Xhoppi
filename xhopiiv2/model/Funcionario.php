<?php

class Funcionario{
    protected $cpf;
    protected $nome;
    protected $sobreNome;
    protected $telefone;
    protected $email;
    protected $salario;
    protected $dataNasc;

    //Construtor
    public function __construct($Cpf,$Nome,$SobreNome,$Telefone,$Email,$Salario,$dataNasc)
    {
        $this->cpf = $Cpf;
        $this->nome = $Nome;
        $this->sobreNome = $SobreNome;
        $this->telefone = $Telefone;
        $this->email = $Email;
        $this->salario = $Salario;
        $this->dataNasc =$dataNasc;
    }

    //Getter e Setter

    public function get_cpf(){
        return($this->cpf);
    }

    public function set_cpf($Cpf){
        $this->cpf = $CPF;
    }

    public function get_Nome(){
        return($this->nome);
    }

    public function set_Nome($Nome){
        $this->nome = $Nome;
    }

    public function get_SobreNome(){
        return($this->sobreNome);
    }

    public function set_SobreNome($SobreNome){
        $this->sobreNome = $SobreNome;
    }


    public function get_Telefofone(){
        return($this->telefone);
    }

    public function set_Telefone($Telefone){
        $this->telefone = $Telefone;
    }

 

    public function get_email(){
        return($this->email);
    }

    public function set_email($Email){
        $this->email = $Email;
    }

    
    public function get_Salario(){
        return($this->salario);
    }

    public function set_salario($Salario){
        $this->salario = $Salario;
    }
    
 
    public function get_dataNasc(){
        return($this->salario);
    }

    public function set_dataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }
}
?>