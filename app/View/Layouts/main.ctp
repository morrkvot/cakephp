<!DOCTYPE html>
<html>
  <head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?> / Linuser</title>
    <?php echo $this->Html->css('main'); ?>
  </head>
  <body>
  <div id="container">
    <div id="header">
      <div id="header_menu">
        <?php echo $this->Html->link('Home', 'http://localhost/cakephp-2/datas/all/'); ?>
        
        <?php
          if(isset($user)):
            echo $this->Html->link('友達を検索する', '#');
            echo $this->Html->link('ログアウト', '/users/logout');
          else:
            echo $this->Html->link('ログイン', '/users/login');
            echo $this->Html->link('新規登録', '/users/register');
          endif;
        ?>
      </div>
      <div id="header_logo">
        <a href="http://localhost/cakephp-2/datas/all/"><img src="http://localhost/cakephp-2/app/webroot/img/linuser.png"></a>
      </div>
      <div id="content">
        <?php echo $this->fetch('content'); ?>
      </div>

      <!-- Add system to fetch datas/comment.ctp and datas/all.ctp -->

      <div id="comment">
        <?php echo $this->fetch('add-comments'); ?>
        <?php echo $this->fetch('comments'); ?>
      </div>
    </div>
  </body>
</html>