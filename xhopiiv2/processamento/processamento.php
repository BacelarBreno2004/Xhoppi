<?php

session_start();
require_once("../model/Produto.php");
require_once '../controller/Controlador.php';

require_once "../model/BancoDeDados.php";
require_once("../model/Produto.php");
require_once("../model/Funcionario.php");
require_once("../model/Cliente.php");

$controlador = new Controlador();

//Login
if(isset($_POST['inputEmailLog']) && isset($_POST['inputSenhaLog'])){

    $_SESSION['estaLogado'] = TRUE;
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];

    //echo "Email: " . $email . "Senha: " . $senha;
    header('Location:../view/home.php');
    die();
}

//Cadastro de Cliente
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputdatanasc']) && 
   !empty($_POST['inputTelefone']) && !empty($_POST['inputemail']) &&
   !empty($_POST['inputsenha'])){

    $nome = $_POST['inputNome'];
    $sobreNome = $_POST['inputsobrenome'];
    $cpf = $_POST['inputCPF'];
    $dataNasc = $_POST['inputdataNasc'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputemail'];
    $senha = $_POST['inputsenha'];
    
    $controlador->cadastrarCliente($nome, $Sobrenome,$datanasc,$telefone, $cpf, $email, $senha);

    header('Location:../view/cadastroCliente.php');
    die();
}

//Cadastro de Funcionário
if(!empty($_POST['inputCPFFunc']) && !empty($_POST['inputNomeFunc']) &&
   !empty($_POST['inputSobrenomeFunc']) && !empty($_POST['inputTelefoneFunc']) && 
   !empty($_POST['inputEmailFunc']) && !empty($_POST['inputSalarioFunc']) &&
   !empty($_POST['inputdataNasc'])) { 


    $cpf = $_POST['inputCPFFunc'];
    $nome = $_POST['inputNomeFunc'];
    $sobreNome = $_POST['inputSobrenomeFunc'];
    $telefone = $_POST['inputTelefoneFunc'];
    $email = $_POST['inputEmailFunc'];
    $salario = $_POST['inputSalarioFunc'];
    $dataNasc = $_POST['inputDataNascFunc'];
    
    $controlador->cadastrarFuncionario($Cpf,$Nome,$SobreNome,$Telefone,$Email,$Salario,$dataNasc);

    header('Location:../view/cadastroFuncionario.php');
    die();
}

//Cadastro de Produto
if(!empty($_POST['inputNomeProd']) && !empty($_POST['inputFabricanteProd']) && 
   !empty($_POST['inputDescricaoProd']) && !empty($_POST['inputValorProd'])){

    $nome = $_POST['inputNomeProd'];
    $fabricante = $_POST['inputFabricanteProd'];
    $descricao = $_POST['inputDescricaoProd'];
    $valor = $_POST['inputValorProd'];
    
    
    $produto = new Produto($nome,$fabricante,$descricao,$valor);
    $bancoDeDados = new BancoDeDados("localhost","root","","xhoppi");
    $bancoDeDados->conectarBD();
    $bancoDeDados->inserirProduto($produto);
    //inserirProduto($nome, $fabricante, $descricao, $valor);

    $controlador->cadastrarProduto($nome,$fabricante,$descricao,$valor);

    header('Location:../view/cadastroProduto.php');
    die();
}

?>