<?php
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @package       app.View.Layouts
* @since         CakePHP(tm) v 0.10.0.1076
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/

$cakeDescription = __d('cake_dev', 'Encontre Aqui');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<style media="screen">
	.footer {
		position:fixed;
		bottom:0;
		width:85%;
	}
	</style>
	<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('bootstrap.min');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"><strong>Encontre Aqui!</strong></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><?php echo $this->Html->link("Home",
				array('controller' => 'pages',
				'action' => '/'));?></li>
				<?php
				$usuario = $this->Session->read('Usuario.nome');
				if(!isset($usuario)){
					echo '<li>'.$this->Html->link("Cadastre-se", array('controller' => 'usuarios','action' => 'addp')).'</li>';
				}
				?>
				<?php
				$usuario = $this->Session->read('Usuario.nome');
				if(isset($usuario)){
					echo '<li>'.$this->Html->link("Área do Cliente", array('controller' => 'usuarios','action' => 'index2')).'</li>';
				}else{
					echo '<li>'.$this->Html->link("Área do Cliente", array('controller' => 'usuarios','action' => 'login')).'</li>';
				}
				?></li>
				<li><?php echo $this->Html->link("Missão e Valores",
				array('controller' => 'admin',
				'action' => 'admin'));?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
				$usuario = $this->Session->read('Usuario.nome');
				if(isset($usuario)){
					echo '<li>'.$this->Html->link("Olá, $usuario. (Sair do Sistema)",array('controller' => 'usuarios','action' => 'logout')).'</li>';
				} ?>
			</ul>
		</div>
	</div>
</nav>
<div class="container body-content">
	<?php echo $this->Flash->render(); ?>
	<?php echo $this->fetch('content'); ?>
</div>
<div class="container text-center">
	<div class="footer">
		<hr>
		Todos os direitos reservados &reg; <strong>Encontre Aqui!</strong>
		<hr>
	</div>
</div>
</body>
</html>
