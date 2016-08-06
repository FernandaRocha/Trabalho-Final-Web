
<br><br>
<h3><strong>Ofertar um novo serviço<br></strong></h3>

<br><br>
<?php
echo $this->Form->create('Servico');
echo $this->Form->input('usuario_id', array('class' => 'form-control','type' => 'hidden','value'=> $id));
echo '<label>Selecione um tipo de serviço a ser ofertado:</label>';
echo $this->Form->select('tipo_id', $tipos,array('empty'=> 'Selecione:','class' => 'form-control'));
echo '<label><br>Não encontrou o serviço?</label>';
echo $this->Html->link(" Clique Aqui",array('controller' => 'usuarios','action' => 'addt'));
echo "<br><br>";
echo $this->Form->input('valor', array('class' => 'form-control'));
echo "<br>";
echo $this->Form->end('Salvar');
    ?>
