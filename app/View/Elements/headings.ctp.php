<?php $this->start('heading1'); ?>
<div class="heading1">
    <h2>Heading 1</h2>
</div>
<div class="ul-list1">
    <ul> 
        <li>list item 1</li>
        <li>list item 2</li>
    </ul>
</div>
<?php $this->end(); ?>
<?php 
    echo $this->element('headings');
?>