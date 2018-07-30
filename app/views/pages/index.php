<?php require_once APPROOT . '/views/include/header.php' ?>
<h1><?php echo $data['title']; ?></h1>
<ul>
<?php foreach($data['pages'] as $page): ?>
  <li><?php echo $page->title; ?></li>
<?php endforeach; ?>
</ul>
<?php require_once APPROOT . '/views/include/footer.php' ?>
