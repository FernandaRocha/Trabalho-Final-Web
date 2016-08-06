<br><br><br><br>
<h2><p align="center"><strong>Cadastro de Usuário</strong></h2></p>
<br>
<div class="container-fluid">
	<div class="rows">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php echo $this->Form->create('Usuario', array('controller' => 'usuarios','url' => 'addp'));?>
			<fieldset>
				<?php
					echo '<label>Nome de Usuário:</label>';
					echo $this->Form->login('login', array('class' => 'form-control'));
					echo '<label>E-mail:</label>';
					echo $this->Form->email('email', array('class' => 'form-control'));
					echo '<label>Telefone:</label>';
					echo $this->Form->telefone('telefone', array('class' => 'form-control'));
					echo '<label>Nome:</label>';
					echo $this->Form->nome('nome', array('class' => 'form-control'));
					echo '<label>Senha:</label>';
					echo $this->Form->password('senha', array('class' => 'form-control'));
					echo "<br>";
				?>
				<div class="container text-center">
					<?php
					echo "<br>";
					echo $this ->Form->end('Salvar', array('class' => 'form-control'));
					?>

				</div>
			</fieldset>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
