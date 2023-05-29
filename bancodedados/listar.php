<?php
    include 'conexao.php';

    $listar=$comando->query("select * from tb_teste");

    $total_registros =$listar->rowCount();

   

    if($total_registros>0)
        echo "<center>";
        echo "<table>";

        echo "<tr><th>Dados Cadastrados</th></tr>";

        echo "<tr><th>Código</th>
        
                <th>Nome</th>
        
                <th>Senha</th>

                <th>Sexo</th>       
        </tr>";

        while($linha=$listar->fetch(PDO::FETCH_ASSOC))
        {
            $vcodigo=$linha['id_t'];
            $vnome=$linha['nome_t'];
            $vsenha=$linha['senha_t'];
            $vsexo=$linha['sexo_t'];

            echo "<tr>
            <td>$vcodigo</td>
            
            <td>$vnome</td>
            
            <td>$vsenha</td>

            <td>$vsexo</td>
            </tr>
            ";
        }
        echo "</table>";
        echo "<br/><br/>";

        echo "<input type='button' value='Voltar' onClick=header('location:cadastro.html');/>";

?>