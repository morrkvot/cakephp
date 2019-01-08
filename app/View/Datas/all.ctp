<h1>Blog posts</h1>
<?php echo $this->element('comment') ?>
<?php echo $this->fetch('comment'); ?>
<table>
    <tr>
        <th>Username</th>
        <th>Comment</th>
        <th>Email</th>
        <th>Post ID</th>
        <th>Time</th>
    </tr>
    
    <?php foreach ($datas as $data): ?>
    <tr>
        <td><?php echo $data['Data']['Name']; ?></td>
        <td><?php echo $data['Data']['Comment']; ?></td>
        <td><?php echo $data['Data']['Email']; ?></td>
        <td><?php echo $data['Data']['ID']; ?></td>
        <td><?php echo $data['Data']['Time']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($data); ?> <!-- unset() destroys the specified variables. -->
</table>

<?php 
    // Shows the next and previous links
echo $this->Paginator->prev(
  '« Previous ',//表示される文字列
  null,//リンクタグに加えるオプション（配列指定）
  null,//リンク無効時の文字列（デフォルト値：null）
  array('class' => 'disabled')//リンク無効時にタグに加えるオプションの指定
);
echo $this->Paginator->numbers(); //To show numbers in between (automated)
echo $this->Paginator->next(
  ' Next »',
  null,
  null,
  array('class' => 'disabled')
);
?>

<!-- <?php
    // echo $paginator->prev('« Previous ', null, null, array('class' => 'disabled'));
    // echo $this->Paginator->numbers();
    // echo $paginator->next(' Next »', null, null, array('class' => 'disabled'));
 ?>
 -->