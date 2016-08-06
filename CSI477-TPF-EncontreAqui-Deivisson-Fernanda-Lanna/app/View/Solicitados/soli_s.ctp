<br><br><br><br>
<div class="container text-center">
  <h2><strong><p align="center">Serviços Contratados</h2></strong></p>
  <?php echo $this->Html->link("Voltar",
  array('controller' => 'usuarios',
  'action' => 'totalS')); ?><br><br>
  <hr>
<table class="table table-bordered table-hover">
  <tbody>
    <tr>
      <th>ID da Solicitação</th>
      <th>ID do Serviço</th>
      <th>Data</th>
      <th>ID do Ofertador</th>
      <th>Preço</th>
    </tr>

    <?php foreach($solicitados as $e): ?>
      <tr>
        <td>
          <?php echo $e['Solicitado']['id']; ?>
        </td>
        <td>
          <?php echo $e['Servico']['id']; ?>
        </td>
        <td>
          <?php echo $e['Solicitado']['data']; ?>
        </td>
        <td>
          <?php echo $e['Solicitado']['ofertador']; ?>
        </td>
        <td>
          <?php echo $e['Servico']['valor']; ?>
        </td>
        <td><?php echo $this->Html->link(
          'Excluir', array(
            'action' => 'excluirS',
            $e['Solicitado']['id']), array('confirm' => 'Você tem certeza que quer excluir este serviço?')
          ); ?></td>
          <td><?php echo $this->Html->link(
            'Avaliar Serviço', array(
              'action' => 'avalias',
              $e['Servico']['id']), array('confirm' => 'Avaliação do serviço prestado!')
            ); ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
