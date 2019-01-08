
<h1>Users</h1>
 <table cellpadding="0" cellspacing="0">
 <tr>
 <th><?php echo "Username";?></th>
 </tr>

 <?php foreach ($Users as $row): ?>

 <tr>

 <td><?php echo h($row['User']['username']); ?>&nbsp;</td>

 </tr>

 <?php endforeach; ?>

 </table>
