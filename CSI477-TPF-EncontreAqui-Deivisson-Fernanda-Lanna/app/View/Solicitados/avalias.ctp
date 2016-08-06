<br><br><br><br>
<h2><p align="center"><strong>Avaliação do Serviço Prestado</strong></h2></p>
<br>
<div class="container text-center">
  <div class="rows">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <?php
        echo $this->Form->create('Avalia');
        echo $this->Form->input('servico_id', array('class' => 'form-control','type' => 'hidden','value'=> $idss));
        echo '<label>Data:</label>';
        echo $this->Form->data('data', array('class' => 'form-control'));
        echo $this->Form->input('nota', array('class' => 'form-control'));
        echo $this->Form->input('usuario_id', array('class' => 'form-control','type' => 'hidden','value'=> $id));
        echo "<br>";
        echo $this->Form->end('Avaliar', array('class' => 'form-control'));
        echo $this->Html->link("Voltar", array('controller' => 'usuarios', 'action' => 'totalS'));
        ?>
    </div>
</div>
