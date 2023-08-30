<?php include('menu/menu.php'); ?>

<div class="main">
    <div class="wrapper">
        <h1>Adicionar administrador</h1>
        <br> <br>
        <form action="" method="POST">

            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" placeholder="Digite seu nome"></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td>
                        <input type="password" name="senha" placeholder="Insira sua senha">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="enviar" value="add admin" class="btn-segundario">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php 
if(isset($_POST['enviar']))
{
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO tbl_adm (nome, senha) VALUES ('$nome', '$senha')";
    
    $res = mysqli_query($conn, $sql);
    
    if ($res)
    {
        echo "Admin inserido";
    }
    else 
    {   
        echo 'Falhou ao inserir o admin';
    }
}
?>
