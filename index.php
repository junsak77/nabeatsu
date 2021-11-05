<!doctype html>
<html lang="ja">
  <head>
    <?php
    include "function.php"
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>3の倍数と3のつく数字でアホになるPHP</title>
  </head>
  <body>
    <h1>3の倍数と3のつく数字でアホになるPHP</h1>
    <p>いくつまで数える？(初期値:40)</p>
    <form action="" method="get">
      <input type="n" name="n" value=40 />
      <input type="submit" />
    </form>
    <ul>
      <?php count_up(); ?>
    </ul>
    <div id="bottom">ｵﾓﾛｰ!!</div>
  </body>
</html>
