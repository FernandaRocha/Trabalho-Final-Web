<?php
class UsuariosController extends AppController{
  public $helpers = array('Html','Form');
  public $components = array('Flash');

  public function index2(){
    $this->loadModel('Usuario');
  }
  public function totalS(){
    $this->loadModel('Servico');
    $this-> set('totalS', $this->Servico->find('all'));
  }

  public function addS(){
    $ss = $this->Session->read("Usuario.id");
    if(isset($ss))
    {
      $this-> set('servicos', $this->Usuario->Servico->find('all',array('conditions' =>
      array('Usuario.id' => $ss), 'order' => " descricao DESC")));
    }else{
      $this->redirect(array("action" => '/index2/'));
    }
  }

  public function addss(){
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
      $tipos = $this->Tipo->Find('list',array('fields' => array('id','descricao')));
      $this-> set('tipos', $tipos);
    }
  }

  public function addserv($ids = NULL, $ido = NULL){
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
      $this->loadModel('Servico');
      $servicos = $this->Servico->Find('list',array('fields' => array('id','usuario_id','tipo_id')));
      $this-> set('servicos', $servicos);
      $this-> set('idss', $ids);
      $this-> set('ido', $ido);
    }
  }

  public function addp(){
    if ($this->Usuario->save($this->request->data)) {
      $this->Flash->set('Usuario Inserido com Sucesso!');
      $this->redirect(array('action' => 'login'));
    }
  }

  public function add(){
    if ($this->request->is("post")) {
      $this->loadModel('Usuario');
      if ($this->Usuario->save($this->request->data)) {
        $this->redirect(array("action" => '/index/'));
      } else {
        $this->Flash->set("Erro: não foi possível salvar o registro.");
        $this->redirect(array("action" => '/index/'));
      }
    }else{
      $ss = $this->Session->read("Usuario.id");
      $this-> set('id', $ss);
      $this->loadModel('Tipo');
      $tipos = $this->Tipo->Find('list',array('fields' => array('id','nome')));
      $this-> set('tipos', $tipos);
    }
  }
  public function addt(){
    $this->loadModel('Tipo');
    if (empty($this->request->data)){
      $tipos = $this->Tipo->find('list',
      array('fields'=>array('id','descricao')));
    }else{
      if ($this->Tipo->save($this->request->data)){
        $this->Flash->set('Procedimento inserido com sucesso');
        $this->redirect(array('action' => 'addss'));
      }
    }
  }

  public function view($codigo=NULL) {
    $usuario = $this->Usuario->findById($codigo);
    $this->set('usuario', $usuario);
  }

  public function editd($codigo){
    if(empty ($this->request->data)){
      $usuarios = $this->Usuario->find('list', array('fields' =>array('id','login','email','telefone','nome','senha')));
      $this->request->data = $this->Usuario->findById($codigo);
    }else{
      if($this->Usuario->save($this->request->data)){
        $this->Flash->set('Dados pessoais atualizado com sucesso');
        $this->redirect(array('action' => 'index2'));
      }
    }
  }

  public function avali(){
      $this->loadModel('Avalia');
      $ss = $this->Session->read("Usuario.id");
      if(isset($ss))
      {
        $this-> set('avalias', $this->Usuario->Avalia->find('all',array('conditions' =>
        array('Usuario.id' => $ss), 'order' => "data DESC, avalia.nota ASC")));
      }else{
        $this->redirect(array("action" => '/addS/'));
      }
    }

  public function del($codigo){
    $this->Usuario->delete($codigo);
    $this->Flash->set('Usuario excluído com sucesso');
    $this->redirect(array('action' => 'addp'));
  }

  public function excluirS($id = NULL) {
    $this->loadModel('Servico');
    if (!$this->request->is('get')) {
      throw new MethodNotAllowedException();
    }
    $this->Servico->id = $id;
    if (!$this->Servico->exists()) {
      throw new NotFoundException(__('Registro não encontrado.'));
    }
    if ($this->Servico->delete()) {
      $this->Flash->set('Registro excluído com sucesso.');
      $this->redirect(array('action' => '/addS/'));
    }
    $this->Flash->set('Erro: não foi possível excluir o registro.');
    $this->redirect(array('action' => '/addS/'));
  }

  public function logout(){
    $this->Session->destroy();
    $this->Session->delete('Usuario.nome');
    $this->Session->delete('Usuario.id');
    $this->redirect(array("action" => '/login/', "controller" => 'usuarios'));
  }

  public function login(){
    if ($this->request->is("post")) {
      $login = $this->request->data('Usuario.login');
      $senha = $this->request->data('Usuario.senha');
      $user = $this->Usuario->find('all',array('conditions' =>
      array('login' => $login, 'senha' => $senha)));

      if(count($user)> 0){
        $this->Session->write("Usuario.nome", $user[0]['Usuario']['nome']);
        $this->Session->write("Usuario.id", $user[0]['Usuario']['id']);
        $this->redirect(array("action" => '/index2/'));
      }else {
        $this->Flash->set("Usuário ou senha inválidos.");
        $this->redirect(array("action" => '/login/'));
      }
    }
  }

  public function search(){
  }

  public function rcidade(){
    $filter = null;
    if (isset($this->request->query['cidade'])) {
      $filter['conditions']['AND']['Tipo.descricao, Servico.preco LIKE']='%'.$this->request->query['cidade'].'%';
    }
    $this->pag = $filter;
    $this->redirect(array("action" => 'rcidade'));
  }
}
?>
