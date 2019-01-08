<h1>Comment</h1>
<?php 
$this->start('comment');

print(
  $this->Form->create('Data') .
  $this->Form->input('Name') .
  $this->Form->input('Comment') .
  $this->Form->input('Email') .
  $this->Form->end('Submit')
); 
$this->end();



$this->start('test');

print(
"ehaheaha"
); 
$this->end();
?>



 <p>Hello, you can comment here!</p>