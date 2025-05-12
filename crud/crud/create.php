<?php
if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'save' && $nome != '') {
    try {
        $stmt = $conexao->prepare("INSERT INTO contatos (nome, email, celular) VALUES
(?, ?, ?)");
$stmt->bindValue(1, $nome);
$stmt->bindValue(2, $email);
$stmt->bindValue(3, $celular);
    }
    catch {
        
    }
}



?>