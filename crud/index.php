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

?>
</body>
</html>