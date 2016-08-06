<?php
class ServicosController extends AppController{
  public $helpers = array('Html','Form');
  public $components = array('Flash');

  public function index(){
    $this-> set('servicos', $this->Servico->find('all',
    array( 'order' => "nome ASC")));
  }

  public function totalS(){
  $this->loadModel('Servico');
  $this-> set('totalS', $this->Servico->find('all'));
}

  public function addS(){
    $this-> set('servicos', $this->Servico->find('all',
    array( 'order' => "nome ASC")));
  }

  public function add(){
  if ($this->request->is("post")) {
    $this->loadModel('Servico');
    if ($this->Servico->save($this->request->data)) {
      $this->redirect(array("action" => '/addS/'));
    } else {
      $this->Flash->set("Erro: não foi possível salvar o registro.");
      $this->redirect(array("action" => '/addS/'));
    }
  }else{
    $ss = $this->Session->read("Usuario.id");
    $this-> set('id', $ss);
    $this->loadModel('Tipo');
    $tipos = $this->Tipo->Find('list',array('fields' => array('id','nome')));
    $this-> set('tipos', $tipos);
  }
}

}
?>
