<?php include('menu/menu.php');?>

<html>
    <head>
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <div class="conteudo-principal">
        <div class="wrapper">
            <H1>Registro administrativo</H1>
            <br> <br> <br>
            <a href="add-adm.php" class="btn-primario">Adicionar administrador</a>
            <br> <br> <br>
            <table class="tbl-full">

                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Deletar</th>
                </tr>

                <?php 
                    $sql = "SELECT * FROM tbl_adm";
                    $res = mysqli_query($conn, $sql);
                    if($res==TRUE)
                    {
                        $count = mysqli_num_rows($res);
                        if($count>0)
                        {
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                $id=$rows['id'];
                                $nome=$rows['nome'];
                                ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $nome; ?></td>
                            <td>
                                <a href="<?php echo SITEURL;?>admin/delete.php?id=<?php echo $id;?>"class="btn-terciario">Deletar</a>
                            </td>
                        </tr>
                             
                        <?php
                            
                            }
                        }
                    }

                        


                    
 
                    

                ?>
            </table>
        </div>
</div>
        
 
 
        </body>

</html>