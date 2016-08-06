<br><br><br><br>
<h2><p align="center"><strong>Editar valor do Serviço</strong></h2></p>
<br><br>
<?php
echo $this->Form->create('Servico');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('id_Usuario',array('type' => 'hidden'));
echo $this->Form->input('id_Procedimento',array('type' => 'hidden'));
?>
<div class="container text-center">
  <div class="rows">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <?php
      echo '<label>Novo Valor:</label>';
      echo $this->Form->valor('valor',array('class' => 'form-control'));
      echo "<br><br>";
      echo $this->Form->input('Alterar', array('type' => 'submit', 'label' => FALSE));
      echo $this->Form->end();
      ?>
    </div>
  </div>
</div>
