<?php

class BancoDeDados{

    private $host;
    private $login;
    private $senha;
    private $dataBase;

    public function __construct($Host, $Login, $Senha, $DataBase){
        $this->host = $Host;
        $this->login = $Login;
        $this->senha = $Senha;
        $this->dataBase = $DataBase;
    }

    //Métodos
    public function conectarBD(){

        $conexao = mysqli_connect($this->host,$this->login,$this->senha,$this->dataBase);
        return($conexao);
    }
    
    public function inserirCliente($cliente){
        
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO cliente (cpf, nome, Sobrenome, Datanascimento, telefone, email, senha) 
                     VALUES ('".$cliente -> get_cpf().
                     "','".$cliente -> get_nome().
                     "','".$cliente -> get_Sobrenome().
                     "','".$cliente -> get_DataNasc().
                     "','".$cliente -> get_telefone().
                     "','".$cliente -> get_email().
                     "','".$cliente -> get_senha()."')";
        mysqli_query($conexao,$consulta);
    }
    
    public function inserirProduto($produto){
        
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO produto (nome, fabricante, descricao, valor) 
                     VALUES ('".$produto->get_Nome()."',
                             '".$produto->get_Fabricante()."',
                             '".$produto->get_Descricao()."',
                             '".$produto->get_Valor()."')";
        mysqli_query($conexao,$consulta);
    }
    
    public function inserirFuncionario($funcionario){
        
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO funcionario (cpf, nome, sobrenome, telefone, email, salario,dataNasc) 
                     VALUES ('".$funcionario -> get_cpf().
                     "','".$funcionario -> get_nome().
                     "','".$funcionario -> get_sobrenome().
                     "','".$funcionario -> get_telefone().
                     "','".$funcionario -> get_email().
                     "','".$funcionario -> get_salario().
                     "','".$funcionario -> get_dataNasc()."')";
        mysqli_query($conexao,$consulta);
    }
    
    public function retornarCliente(){
    
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM cliente";
        $listaCliente = mysqli_query($conexao,$consulta);
        return $listaCliente;
    }
    
    public function retornarProdutos(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM produto";
        $listaProdutos = mysqli_query($conexao,$consulta);
        return $listaProdutos;
    }

    public function retornarFuncionario(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM Funcionario";
        $listafuncionario = mysqli_query($conexao,$consulta);
        return $listafuncionario;
    }


}

?>