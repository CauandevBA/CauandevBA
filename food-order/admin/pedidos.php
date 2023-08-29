<?php include('menu/menu.php'); ?>
<html>

<div class="main">
    <div class=wrapper>
        <h1>Adicionar pedido</h1>
        <br> <br>
        <form action="" method="POST">

            <table>
                <tr>
                    <td>descrição_pedido:</td>
                    <td><input type="text" name="descrição_pedido" placeholder="Qual foi o pedido?"></td>
                <tr>
                    <td>data:</td>
                    <td>
                        <input type="date" name="data" placeholder="Insira a data">
                    </td>
                    <tr>
                        <td>endereço</td>
                        <td>
                            <input type="text" name="endereço" placeholder="Insira o endereço do pedido">
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="enviar" value="enviar pedido" class="btn-segundario">
                            </td>
                    </tr>
                </tr>
            </table>
        </form>
        
        <?php 
    if(isset($_POST['enviar']))
    {
        $descrição_pedido = $_POST['descrição_pedido'];
        $data = date('d/m/Y', strtotime($_POST['data']));
        $endereço = $_POST['endereço'];
        
        $sql = "INSERT INTO pedido SET
            descrição_pedido='$descrição_pedido',    
            data='$data',
            endereço='$endereço'    
        "; 
       
       $res = mysqli_query($conn, $sql) or die(mysqli_error());
       
       if ($res == TRUE)
       {
           echo "Enviado com sucesso";
        }
        else 
        {   
            echo 'falhou';
        }
    }
    ?>
       <div class="conteudo-principal">
           </div>
       </div>
        <div class="wrapper">
            <H1>Historico de pedidos</H1>
            <br> <br> <br>  
            <table class="tbl-full">

                <tr>
                    <th>Id pedido</th>
                    <th>Pedido</th>
                    <th>Data</th>
                    <th>Endereço</th>
                    <th>Deletar</th>
                </tr>

                <?php 
                    $sql = "SELECT * FROM pedido";
                    $res = mysqli_query($conn, $sql);
                    if($res==TRUE)
                    {
                        $count = mysqli_num_rows($res);
                        if($count>0)
                        {
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                $id=$rows['id'];
                                $descrição_pedido=$rows['descrição_pedido'];
                                $data=$rows['data'];
                                $endereço=$rows['endereço'];
                                ?>
                        <tr>
                        <td><?php echo $id; ?></td>
                            <td><?php echo $descrição_pedido; ?></td>
                            <td><?php echo $data; ?></td>
                            <td><?php echo $endereço; ?></td>
                            <td>
                                <a href="<?php echo SITEURL;?>admin/delete-pedido.php?id=<?php echo $id;?>"class="btn-terciario">Deletar</a>
                            </td>
                            
                        </tr>
                             
                        <?php
                            
                            }
                        }
                    }

                        


                    
 
                    

                ?>
            </table>

</html>