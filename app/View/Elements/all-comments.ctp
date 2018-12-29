<?php $this->start('all-comments'); ?>
<h1>Blog posts</h1>
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
    <?php unset($data); ?>
</table>
<?php $this->end(); ?>
