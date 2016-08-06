<br><br><br><br>
<h2><p align="center"><strong>Adicionar um Tipo de Serviço</strong></h2></p>
<br><br>
<div class="container text-center">
  <div class="rows">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <?php
      echo $this->Form->create('Tipo');
      echo '<label>Descrição:</label>';
      echo $this->Form->descricao('descricao',  array('class' => 'form-control'));
      echo "<br><br>";
      echo$this->Form->end('Salvar',  array('class' => 'form-control'));
      ?>
    </div>
  </div>
</div>
