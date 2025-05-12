<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="?act=save" method="POST" name="form1" >
    <h1>Agenda de contatos</h1>
        <hr>
    <input type="hidden" name="id" />
        Nome:
            <input type="text" name="nome" />
        E-mail:
            <input type="text" name="email" />
        
        Celular:
            <input type="text" name="celular" />
            
            <input type="submit" value="salvar" />
        <hr>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
$nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
$email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] :
"";
$celular = (isset($_POST["celular"]) && $_POST["celular"] != null) ?
$_POST["celular"] : NULL;
    }   else if (!isset($id)) {
$id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
$nome = NULL;
$email = NULL;
$celular = NULL;
    }
?>
</body>
</html>