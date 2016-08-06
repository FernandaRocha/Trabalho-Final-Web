<br><br><br><br>
<div class="container text-center">
  <h2><strong><p align="center">Serviços Oferecidos</h2></strong></p>
  <?php echo $this->Html->link("Voltar",
  array('controller' => 'usuarios',
  'action' => 'index2')); ?><br><br><br><br>
  <?php echo $this->Html->link("Ver meus serviços solicitados",
  array('controller' => 'solicitados',
  'action' => 'soliS'));?> <br><br>
  <?php echo $this->Html->link("Pesquisa Avançada",
  array('controller' => 'usuarios',
  'action' => 'search')); ?><br><br>
</div>
<hr>
<table class="table table-bordered table-hover">
  <tbody>
    <tr>
      <th>ID</th>
      <th>Descrição do Serviço</th>
      <th>Preço</th>
      <th>Quem Oferta</th>
      <th>Endereço</th>
      <th>Cidade</th>
    </tr>

    <?php foreach($totalS as $e): ?>
      <tr>
        <td>
          <?php echo $e['Servico']['id']; ?>
        </td>
        <td>
          <?php echo $e['Tipo']['descricao']; ?>
        </td>
        <td>
          <?php echo $e['Servico']['valor']; ?>
        </td>
        <td>
          <?php echo $e['Usuario']['nome']; ?>
        </td>
        <td>
          <?php echo $e['Servico']['rua'].',  '.$e['Servico']['bairro']; ?>
        </td>
        <td>
          <?php echo $e['Servico']['cidade']; ?>
        </td>
        <td>
          <?php
          $usu = $this->Session->read('Usuario.id');
          if($usu == $e['Servico']['usuario_id']){
            echo "Serviço Próprio";
          }else{
            echo $this->Html->link("Contratar",
    				array('controller' => 'usuarios',
    				'action' => 'addserv', $e['Servico']['id'], $e['Usuario']['id']));
          }
          ?>
        </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>
