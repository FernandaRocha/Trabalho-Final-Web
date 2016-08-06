<?php
    class Usuario extends AppModel{
         public $hasMany = array('Servico','Solicitado');
    }
?>
