<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php
    if (isset($_GET['usuario'])) {
        $valida = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $i = filter_var($valida, FILTER_VALIDATE_INT);
        $u = $_GET['usuario'];
        $s = $_GET['senha'];
        $c = $_GET['cargo'];
    } else {
        $i = "";
        $u = "";
        $s = "";
        $c = "";
    }
?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <center>
        <h1>Editar Usuário</h1>
        <form action="verifica2.php" method="post" name="frmcons">
            Código: <input type="text" name="txti" value="<?php echo $i; ?>"> <br>
            <input type="submit" value="Consultar" name="btnpes"> <br>
            Usuário: <input type="text" name="txtu" value="<?php echo $u; ?>"> <br>
            Senha: <input type="text" name="txts" value="<?php echo $s; ?>"> <br>
            Cargo: <input type="text" name="txtc" value="<?php echo $c; ?>"> <br>
            <input type="submit" value="Alterar" name="btnalt">
            <input type="submit" value="Excluir" name="btnex">
            <input type="submit" value="Listar" name="btnli">
        </form>
    </center>
</body>
</html>

