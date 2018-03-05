<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/Todo.php');

// get todos
$todoApp = new \MyApp\Todo();
$todos = $todoApp->getAll();


?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>todo apps</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="" id="container">
      <h1>Todos</h1>
      <form action="">
        <input type="text" id="new_todo" placeholder="what needs to be done?">
      </form>
      <ul>
        <?php foreach ($todos as $todo) : ?>
        <li>
          <input type="checkbox" <?php if ($todo->state === '1') { echo 'checked'; } ?>>
          <span class="<?php if ($todo->state === '1') { echo 'done'; } ?>"><?php echo h($todo->title); ?></span>
          <div class="delete_todo">×</div>
        </li>
      <?php endforeach; ?>
      </ul>
    </div>
  </body>
</html>
