<h1><?php print($message); ?></h1>

<?php
	//'comment' refers to the file comment.ctp in view/elements/
    echo $this->element('comment');

    //refers to the $this->start('~~'); of whatever is being fetched
    echo $this->fetch('cet');
    echo $this->fetch('test');

    echo $this->element('all-comments');
    echo $this->fetch('all-comments');


?>