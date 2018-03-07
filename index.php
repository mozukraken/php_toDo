<?php

session_start();

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
      <form action="" id="new_todo_form">
        <input type="text" id="new_todo" placeholder="what needs to be done?">
      </form>
      <ul id="todos">
        <?php foreach ($todos as $todo) : ?>
        <li id="todo_<?php echo h($todo->id); ?>" data-id="<?php echo h($todo->id); ?>">
          <input type="checkbox" class="update_todo" <?php if ($todo->state === '1') { echo 'checked'; } ?>>
          <span class="rodo_title <?php if ($todo->state === '1') { echo 'done'; } ?>"><?php echo h($todo->title); ?></span>
          <div class="delete_todo">×</div>
        </li>
      <?php endforeach; ?>
        <li id="todo_template" data-id="">
          <input type="checkbox" class="update_todo">
          <span class="todo_title"></span>
          <div class="delete_todo">x</div>
        </li>
      </ul>
    </div>
    <input type="hidden" id="token" name="" value="<?= h($_SESSION['token']); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="todo.js"></script>
  </body>
</html>
