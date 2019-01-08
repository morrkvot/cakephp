<?php
App::uses('AppController', 'Controller');

class DatasController extends AppController {

  public function index() {
    $this->set('message','Hello');
  }
  public function get($name){
    $options = array('conditions' => array('name' => $name));
    $datas = $this->Data->find('all', $options);
    $this->set('datas', $datas);
    $this->set('name', $name);
  }
  
  public function all() {
        $this->set('datas', $this->Data->find('all'));

    if ($this->request->is('post')) {
            $this->Data->create();
            if ($this->Data->save($this->request->data)) {
                return $this->redirect(array('action' => 'all'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }

  //PAGINATION - REMOVE TO POST ALL
  $this->paginate=array(
  'fields' => array('Data.Name', 'Data.Comment','Data.Email', 'Data.ID', 'Data.Time'),
  'limit' => 5,
  'order' => array(
      'Data.ID' => 'desc'
  )
      );
  $this->set('datas',$this->paginate());

  }

  //Fix
  public function comment() {
  	if ($this->request->is('post')) {
            $this->Data->create();
            if ($this->Data->save($this->request->data)) {
                return $this->redirect(array('action' => 'all'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        } 
    }

	public function find($name){
    	if ($this->request->is('Username')) {
            $this->Data->create();
            if ($this->Data->save($this->request->data)) {
                return $this->redirect(array('action' => 'all'));
            }
            $this->Flash->error(__('Unable to find user.'));
        } 
    }
}
