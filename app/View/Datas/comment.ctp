<h1>Comment</h1>
<?php print(
  $this->Form->create('Data') .
  $this->Form->input('Name') .
  $this->Form->input('Comment') .
  $this->Form->input('Email') .
  $this->Form->end('Submit')
); 
?>