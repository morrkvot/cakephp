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



 <p>Hello this is a p after the Forms in the comment element</p>