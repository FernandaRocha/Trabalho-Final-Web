<br><br><br><br>
<h2><p align="center"><strong>Dados Pessoais</strong></h2></p>
<br>
  <div class="container text-center">
    <p>Código: <?php echo $usuario['Usuario']['id'] ?> </p>
    <p>Login: <?php echo $usuario['Usuario']['login'] ?> </p>
    <p>Email: <?php echo $usuario['Usuario']['email'] ?> </p>
    <p>Telefone: <?php echo $usuario['Usuario']['telefone'] ?> </p>
    <p>Nome: <?php echo $usuario['Usuario']['nome'] ?> </p>
    <p>Senha: <?php echo $usuario['Usuario']['senha'] ?> </p>

    <?php
    echo "<br>";
    echo $this->Html->link("Editar", array('controller' => 'usuarios', 'action' => 'editd', $usuario['Usuario']['id']));
    ?>
    <br><br>
    <?php echo $this->Html->link("Voltar", array('controller' => 'usuarios', 'action' => 'index2')); ?>
  </div>
