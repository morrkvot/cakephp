<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

  //読み込むコンポーネントの指定
  public $components = array('Session', 'Auth');

  //どのアクションが呼ばれてもはじめに実行される関数
  public function beforeFilter()
  {
    parent::beforeFilter();

    //未ログインでアクセスできるアクションを指定
    //これ以外のアクションへのアクセスはloginにリダイレクトされる規約になっている
    $this->Auth->allow('register', 'login');
  }

  //ログイン後にリダイレクトされるアクション
  public function index(){
    $this->set('user', $this->Auth->user());
  }

  public function register(){
    //$this->requestにPOSTされたデータが入っている
    //POSTメソッドかつユーザ追加が成功したら
    if($this->request->is('post') && $this->User->save($this->request->data)){
      //ログイン
      //$this->request->dataの値を使用してログインする規約になっている
      $this->Auth->login();
      $this->redirect('http://localhost/cakephp-2/datas/all');
    }
  }

  public function login(){
    if($this->request->is('post')) {
      if($this->Auth->login())
        return $this->redirect('http://localhost/cakephp-2/datas/all');
      else
        $this->Session->setFlash('ログイン失敗');
    }
  }

  public function logout(){
    $this->Auth->logout();
    $this->redirect('login');
  }


  public function search(){
  }
  public function test(){
 //リクエストがPOSTの場合
 if($this->request->is('post')){
 //Formの値を取得
 //$username=$this->data['Search']['username'];
 $username=$this->request->data['Search']['username'];
 //POSTされたデータを曖昧検索
 $data=$this->User->find('all',array(
 'conditions'=>array('username like'=>'%'.$username.'%')));
 $this->set('Users',$data);
 }else{ //POST以外の場合
 //Collectionモデルから全てのデータを検索
 $data=$this->User->find('all');
 //データの連想配列をセット
 $this->set('Users',$data);
 }
 }

}