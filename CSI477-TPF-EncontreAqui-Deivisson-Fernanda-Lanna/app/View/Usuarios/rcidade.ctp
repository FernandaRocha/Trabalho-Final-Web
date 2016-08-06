table class="table table-bordered table-hover">
  <tbody>
    <tr>
      <th>ID</th>
      <th>Descrição do Serviço</th>
      <th>Preço</th>
      <th>Quem Oferta</th>
      <th>Endereço</th>
      <th>Cidade</th>
    </tr>

    <?php foreach($pag as $e): ?>
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
