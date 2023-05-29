<?php
    include 'conexao.php';

    $varnome=$_POST['txtnome'];
    $varsenha=$_POST['txtsenha'];
    $varsexo =$_POST['txtsexo'];


    $incluir =$comando->query("insert into tb_teste(nome_t, senha_t, sexo_t) 
            values('$varnome', '$varsenha', '$varsexo')");

    echo "<script language='Javascript'>alert('Dados Cadastrados com sucesso!')</script>"
?>