<?php

    include_once('conexao.php');

    //consultar no banco de dados

    // Criar a Query para recuperar os registros do BD
    $query_usuarios = "SELECT nome,cpf,idade,endereco,email,senha,senhaconfirm 
                        FROM tb_clientes                       
                        ORDER BY nome ASC";

    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    $dados="";
    while ($ron_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
        extract($ron_usuario);
        $dados .= "<tr>
                        <td>$nome</td>
                        <td>$CPF</td>
                        <td>$idade</td>
                        <td>$endereco</td>
                        <td>$email</td>
                        <td>$senha</td>
                        <td>$senhaconfirm</td>
                </tr>";        
    };

    echo $dados;
    ?>