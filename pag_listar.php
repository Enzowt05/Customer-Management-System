<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    include_once 'Usuario_DAO.php';
    $obj = new UsuarioDAO();
    $select = $obj->lista();
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <center>
        <h1>Listar Usuário</h1>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Usuario</td>
                <td>Senha</td>
                <td>Cargo</td>
                <td>Editar</td>
            </tr>
            <?php
            if (isset($select)) {
                foreach ($select as $usuario) {
                    echo '<tr>';
                    echo '<td>'.$usuario['tb_usuario_id'].'</td>';
                    echo '<td>'.$usuario['tb_usuario_usuario'].'</td>';
                    echo '<td>'.$usuario['tb_usuario_senha'].'</td>';
                    echo '<td>'.$usuario['tb_usuario_cargo'].'</td>';
                    echo '<td> <a href="pag_pes_usu.php?id='.$usuario['tb_usuario_id'].'&&usuario='.$usuario['tb_usuario_usuario'].'&&senha='.$usuario['tb_usuario_senha'].'&&cargo='.$usuario['tb_usuario_cargo'].'">Editar</a></td>';
                    echo '<tr>';
                }
            } else {
                echo "Tabela vazia";
            }

            ?>
        </table>
    </center>
    
</body>
</html>