<br><br><br><br>
<h2><p align="center"><strong>Acesso ao Sistema</strong></h2></p>
<br>
<div class="container-fluid">
	<div class="rows">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<?php
		  	echo $this->Form->create('Usuario',
		    array('url' => 'login'));
		    echo '<label>Nome de Usuário:</label>';
		    echo "<br>";
		    echo $this ->Form->login('login', array('class' => 'form-control'));
		    echo '<label>Senha:</label>';
		    echo "<br>";
		    echo $this ->Form->password('senha', array('class' => 'form-control'));
		    echo "<br><br>";
				?>
				<div class="container text-center">
					<?php echo $this ->Form->end('Acessar', array('class' => 'form-control')); ?>
				</div>
		</div>
	</div>
</div>
