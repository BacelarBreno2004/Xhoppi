<?php
require_once("../model/BancoDeDados.php");
Class Controlador
{
    //Atributo
    private $bancoDeDados;

    function __construct()
    {
       $this->bancoDeDados = new BancoDeDados("localhost","root","","xhoppi");
    }

    Public function cadastrarProduto($nome,$fabricante,$descricao,$valor)
    {
        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->bancoDeDados->inserirProduto($produto);  
    }
     
    public function visualizarProduto()
    {       $this->bancoDeDados->conectarBD();
            $ListarProduto = $this->bancoDeDados->retornarProdutos();
            $product = "";
            while($produto = mysqli_fetch_assoc($ListarProduto)){
            $product .=  "<section class=\"conteudo-bloco\">"
            . "<h2>" . $produto["nome"] . "</h2>"
            . "<p>Fabricante: " . $produto["fabricante"] . "</p>"
            . "<p>Descrição: " . $produto["descricao"] . "</p>"
            . "<p>Valor: " . $produto["valor"] . "</p>"
            . "</section>";
            }
            return $product;
    }

    Public function cadastrarCliente($nome, $Sobrenome,$datanasc,$telefone, $cpf, $email, $senha)
    {
        $clinete = new cliente($nome, $sobrenome,$datanasc,$telefone, $cpf, $email, $senha);
        $this->bancoDeDados->inserirCliente($cliente);  
    }


    public function visualizarCliente()
    {
      $this->bancoDeDados->conectarBD();
        $ListarCliente = $this->bancoDeDados->retornarCliente();
        $pessoa ="";
        while($cliente = mysqli_fetch_assoc($ListarCliente))
        {
        $pessoa = "<section class=\"conteudo-bloco\">"
        . "<h2>" . $cliente["nome"] . "</h2>"
        . "<p>sobrenome: " . $cliente["sobrenome"] . "</p>"
        . "<p>datanasc: " . $cliente["datanasc"] . "</p>"
        . "<p>telefone: " . $cliente["telefone"] . "</p>"
        . "<p>cpf: " . $cliente["cpf"] . "</p>"
        . "<p>email: " . $cliente["email"] . "</p>"
        . "<p>senha: " . $cliente["senha"] . "</p>"
        . "</section>";
        }
        return $ListarCliente;
    }
    

    Public function cadastrarfuncionario($Cpf,$Nome,$sobreNome,$Telefone,$Email,$Salario,$dataNasc)
    {
        $funcionario = new funcionario($Cpf,$Nome,$sobreNome,$Telefone,$Email,$Salario,$dataNasc);
        $this->bancoDeDados->inserirProduto($funcionario);  
    }
     
    public function visualizarfuncionario()
    {       $this->bancoDeDados->conectarBD();
            $Listarfuncionario = $this->bancoDeDados->retornarfuncionario();
            $funcionario = "";
            while($funcionario = mysqli_fetch_assoc($Listarfuncionario)){
            $funcionario .=  "<section class=\"conteudo-bloco\">"
            . "<h2>" . $funcionario["cpf"] . "</h2>"
            . "<p>nome: " . $funcionario["nome"] . "</p>"
            . "<p>sobreNome: " . $funcionario["sobreNome"] . "</p>"
            . "<p>telefone: " . $funcionario["telefone"] . "</p>"
            . "<p>email: " . $funcionario["email"] . "</p>"
            . "<p>salario: " . $funcionario["salario"] . "</p>"
            . "<p>dataNasc: " . $funcionario["dataNasc"] . "</p>"
            . "</section>";
            }
            return $Listarfuncionario;
    }


}

?>