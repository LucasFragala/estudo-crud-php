<?php
//Conexão
include_once 'php_action/db_connect.php';
//HEADER 
include_once 'includes/header.php';
//Mensagem
include_once 'includes/message.php';

?>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="stiped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <th><?php echo $dados['nome']; ?></th>
                    <th><?php echo $dados['sobrenome']; ?></th>
                    <th><?php echo $dados['email']; ?></th>
                    <th><?php echo $dados['idade']; ?></th>
                    <th><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></th>
                    <th><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></th>

                    <!-- Modal Structure -->
                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content">
                        <h4>Opa!</h4>
                        <p>Você tem certeza que deseja excluir este cliente?</p>
                        </div>
                        <div class="modal-footer">
                        

                        <form action="php_action/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                            <button type="submit" name="btn-deletar" class="btn-red">Sim, quero deletar.</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </form>
                        </div>
                    </div>
                </tr> 
                <?php 
                endwhile;
                else: ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php 
                endif;
                ?>   
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
</div>



<?php
//FOOTER
include_once 'includes/footer.php';


?>
    



