<?php
class SolicitadosController extends AppController{
  public $helpers = array('Html','Form');
  public $components = array('Flash');

  public function totalS(){
  $this->loadModel('Servico');
  $this-> set('totalS', $this->Servico->find('all'));
}

  public function avali() {

  }

  public function addserv(){
  if ($this->request->is("post")) {
    $this->loadModel('Solicitado');
    if ($this->Solicitado->save($this->request->data)) {
      $this->redirect(array("action" => '/totalS/'));
    } else {
      $this->Flash->set("Erro: não foi possível salvar o registro.");
      $this->redirect(array("action" => '/totalS/'));
    }
  }else{
    $ss = $this->Session->read("Usuario.id");
    $this-> set('id', $ss);
    $this->loadModel('Tipo');
    $tipos = $this->Tipo->Find('list',array('fields' => array('id')));
    $this-> set('tipos', $tipos);
  }
}
public function avalias($ids = NULL,$ido){
  if ($this->request->is("post")) {
    $this->loadModel('Avalia');
    if ($this->Avalia->save($this->request->data)) {
      $this->redirect(array("action" => '/totalS/'));
    } else {
      $this->Flash->set("Erro: não foi possível salvar o registro.");
      $this->redirect(array("action" => '/totalS/'));
    }
  }else{
    $ss = $this->Session->read("Usuario.id");
    $this-> set('id', $ss);
    $this->loadModel('Servico');
    $servicos = $this->Servico->Find('list',array('fields' => array('id','usuario_id','tipo_id')));
    $this-> set('servicos', $servicos);
    $this-> set('idss', $ids);
  }
}


public function soliS(){
  $this->set('solicitados', $this->Solicitado->find('all',
  array('order' => "nome ASC")));
}

public function excluirS($id = NULL) {
  $this->loadModel('Solicitado');
  if (!$this->request->is('get')) {
    throw new MethodNotAllowedException();
  }
  $this->Solicitado->id = $id;
  if ($this->Solicitado->delete()) {
    $this->Flash->set('Registro excluído com sucesso.');
    $this->redirect(array('action' => '/soliS/'));
  }
  $this->Flash->set('Erro: não foi possível excluir o registro.');
  $this->redirect(array('action' => '/soliS/'));
}
}
?>
