<br><br><br>
<div class="container text-center">
  <h2><strong><p align="center">Cadastramento de Serviço</h2></strong></p>
  <br>
  <div class="rows">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <?php
      echo $this->Form->create('Servico');
      echo $this->Form->input('usuario_id', array('class' => 'form-control','type' => 'hidden','value'=> $id));
      echo '<label>Selecione um tipo de serviço a ser ofertado:</label>';
      echo $this->Form->select('tipo_id', $tipos,array('empty'=> 'Selecione:','class' => 'form-control'));
      echo '<label><br>Não encontrou o serviço?</label>';
      echo $this->Html->link(" Clique Aqui",array('controller' => 'usuarios','action' => 'addt'));
      echo "<br><br>";
      echo '<label>Valor (R$):</label>';
      echo $this->Form->valor('valor', array('class' => 'form-control'));
      echo '<label>Rua|Avenida-Numero:</label>';
      echo $this->Form->rua('rua', array('class' => 'form-control'));
      echo '<label>Bairro:</label>';
      echo $this->Form->bairro('bairro', array('class' => 'form-control'));
      echo '<label>Cidade:</label>';
      echo $this->Form->cidade('cidade', array('class' => 'form-control'));
      echo "<br>";

      ?>
      <div class="col-md-3"></div>
      <div class="col-md-3">
        <?php echo $this->Form->end('Salvar', array('class' => 'form-control'));?>
      </div>
      <div class="col-md-4">
        <p align="left">
          <?php echo $this->Html->link("Voltar",
          array('controller' => 'usuarios',
          'action' => 'addS')); ?>
        </p>
      </div>
    </div>
  </div>
</div>
