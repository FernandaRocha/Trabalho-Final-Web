<br><br><br><br>
<div class="container text-center">
  <h2><strong><p align="center">Oferta de Serviços</h2></strong></p>
  <?php echo $this->Html->link("Ofertar Um Novo Serviço",
  array('controller' => 'usuarios',
  'action' => 'addss'));?><br><br>
  <?php echo $this->Html->link("Voltar",
  array('controller' => 'usuarios',
  'action' => 'index2')); ?><br><br>
<br>
<div class="rows">
  <h4><strong>Serviços Ofertados</strong></h4>
  <hr/>
  <table class="table table-bordered table-hover">
  <tbody>
    <tr>
      <th>ID</th>
      <th>Descrição do Serviço</th>
      <th>Preço</th>
    </tr>

    <?php foreach($servicos as $e): ?>
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
      <td><?php echo $this->Html->link('Editar', array('action' => 'editarS', $e['Servico']['id'])); ?>
        | <?php echo $this->Html->link(
        'Excluir', array(
        'action' => 'excluirS',
        $e['Servico']['id']), array('confirm' => 'Você tem certeza que quer excluir este serviço?')
        ); ?></td>
    </tr>
    <?php endforeach ?>
    </tbody>
  </table>
</div>
