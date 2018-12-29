<h1><?php print(h($name)); ?>さんの投稿一覧</h1>
<?php foreach($datas as $data): ?>
  <?php print(h($data["Data"]["Name"]) . ' (' . h($data["Data"]["Comment"]) . ')' . ' ('. h($data["Data"]["Email"]). ')' . ' ID:' . h($data["Data"]["ID"])); ?>
<?php endforeach; ?>