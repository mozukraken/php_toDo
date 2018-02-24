<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');
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
        <input type="text" name="" value="" placeholder="what needs to be done?">
      </form>
      <ul>
        <li>
          <input type="checkbox" name="" value="" id="new_todo">
          <span>Do something</span>
          <div class="delete_todo">×</div>
        </li>
        <li>
          <input type="checkbox" checked name="" value="" id="">
          <span class="done">Do something again</span>
          <div class="delete_todo">×</div>
        </li>
      </ul>
    </div>
  </body>
</html>
