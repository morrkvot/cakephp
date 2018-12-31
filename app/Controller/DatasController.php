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
            $this->Flash->error(__('Unable to add your post.'));
        } 
    }
}
