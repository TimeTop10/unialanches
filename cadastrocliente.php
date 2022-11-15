<?php

    include_once('conexao.php');

    $nome=$post['nome'];
    $CPF=$post['CPF'];
    $idade=$post['idade'];
    $endereco=$post['endereco'];
    $email=$post['email'];
    $senha=$post['senha'];
    $senhacoonfirm=$post['senhaconfirm'];
 

    $sql = 'INSERT INTO tb_cadastro(nome,cpf,idade,endereco,email,senha,senhaconfirm) VALUES (nome,idade,endereco,email,senha,senhaconfirm)';
    $stmt = $conn->prepare($sql);


    
    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':CPF',$CPF);
    $stmt->bindParam(':idade',$idade);
    $stmt->bindParam(':endereco',$endereco);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':senha',$senha);
    $stmt->bindParam(':senhaconfirm',$senhaconfirm);

    $stmt->execute();
    ?>