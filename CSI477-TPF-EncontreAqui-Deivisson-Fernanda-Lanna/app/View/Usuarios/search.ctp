<br><br><br><br>
<h2><p align="center"><strong>Pesquisa avançada</strong></h2></p>
<br><br><br><br>
<div class="container text-center">
  <div class="rows">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <?php
        echo $this->Form->create('Usuario', ['url' => $this->Html->url( ['controller' => 'usuarios', 'url' => 'rcidade'], true ),
                'type' => 'get']);
        echo $this->Form->input('cidade:', ['value' => (isset($this->request->query['cidade']))? $this->request->query['cidade'] : null], array('class' => 'form-control'));
        echo "<br><br>";
        echo $this->Form->button('Filtrar resultados', array('class' => 'form-control'));
        echo "<br>";
        echo $this->Html->link("Voltar",
        array('controller' => 'usuarios',
        'action' => 'totalS'));
        echo $this->Form->end();
        ?>
    </div>
  </div>
</div>
