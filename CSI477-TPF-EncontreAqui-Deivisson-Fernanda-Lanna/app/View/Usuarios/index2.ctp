<br><br><br><br>
<div class="container text-center">
  <h2><strong><p align="center">Escolha uma das opções disponíveis em nosso Sistema:</h2></strong></p><br><br>
<br>
<div class="rows">
  <div class="col-md-2"></div>
  <div class="col-md-3">
    <?php echo $this->Html->image('dados.png'); ?><br><br>
    <?php
    $eu = $this->Session->read('Usuario.id');
    echo $this->Html->link("Dados Pessoais",
    array('controller' => 'usuarios',
    'action' => 'view',$eu));?> <br><br>
  </div>
  <div class="col-md-3">
    <?php echo $this->Html->image('oferta.jpg'); ?><br><br>
    <?php echo $this->Html->link("Ofertar Serviço ",
    array('controller' => 'usuarios',
    'action' => 'addS'));?> <br></br>
  </div>
  <div class="col-md-3">
    <?php echo $this->Html->image('pesquisa.jpg'); ?><br><br>
    <?php echo $this->Html->link("Procurar por um serviço",
    array('controller' => 'usuarios',
    'action' => 'totalS'));?> <br></br>
  </div>
</div>
</div>
