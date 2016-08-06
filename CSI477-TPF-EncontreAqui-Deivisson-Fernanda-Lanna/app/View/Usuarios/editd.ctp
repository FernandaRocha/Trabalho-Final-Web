<br><br><br>
<div class="container text-center">
  <h2><strong><p align="center">Editar Dados Pessoais</h2></strong></p>
  <br>
  <div class="container text-center">
    <div class="rows">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <?php
        echo $this->Form->create('Usuario');
        echo '<label>ID de usuário:</label>';
        echo $this->Form->id('id', array('class' => 'form-control'));
        echo '<label>Login:</label>';
        echo $this->Form->login('login', array('class' => 'form-control'));
        echo '<label>E-mail:</label>';
        echo $this->Form->email('email', array('class' => 'form-control'));
        echo '<label>Telefone:</label>';
        echo $this->Form->telefone('telefone', array('class' => 'form-control'));
        echo '<label>Nome:</label>';
        echo $this->Form->nome('nome', array('class' => 'form-control'));
        echo '<label>Senha:</label>';
        echo $this->Form->password('senha', array('class' => 'form-control'));
        echo "<br>";
        ?>
        <div class="col-md-5">
          <?php echo $this->Html->link("Voltar", array('controller' => 'usuarios', 'action' => 'index2')); ?>
        </div>
        <div class="col-md-6">
          <?php echo $this->Form->end('Salvar', array('class' => 'form-control')); ?>
        </div>
    </div>
    </div>
  </div>
</div>
