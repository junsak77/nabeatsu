<?php
// 数字を数え上げる
function count_up() {
  $limit = isset($_GET['n']) ? $_GET['n'] : 40;
  for($i = 1; $i <= $limit; $i++) {
    if(is_fool($i)) {
      echo "<li>" . foolize($i) . "www (" . $i . ")" . "</li>";
    } else {
      echo "<li>" . $i . "</li>";
    }
  }
}

// アホになるかどうかを判定(3の倍数 or 3がつく)
function is_fool($i) {
  return ($i % 3 == 0) || (strpos($i, '3') !== false);
}

// 数字をアホにする(8桁まで対応)
function foolize($i) {
  if($i > 9999) {
    return foolize(floor($i / 10000)) . "ﾏﾝ" . foolize($i % 10000);
  }
  $foolish = [
    0 => "",
    1 => "ｲﾁ",
    2 => "ﾆ",
    3 => "ｻﾝ",
    4 => "ﾖﾝ",
    5 => "ｺﾞ",
    6 => "ﾛｸ",
    7 => "ﾅﾅ",
    8 => "ﾊﾁ",
    9 => "ｷｭｰ"
  ];

  $order_name = [
    4 => "ｾﾝ",
    3 => "ﾋｬｸ",
    2 => "ｼﾞｭｰ",
    1 => ""
  ];

  $digits = str_split($i % 10000);
  $order = strlen($i);
  $ret = "";

  foreach($digits as $digit) {
    $add = "";
    if($digit == 3 && $order == 4) {
      $add = "ｻﾝｾﾞﾝ";
    } elseif($digit == 8 && $order == 4) {
      $add = "ﾊｯｾﾝ";
    } elseif($digit == 3 && $order == 3) {
      $add = "ｻﾝﾋﾞｬｸ";
    } elseif($digit == 6 && $order == 3) {
      $add = "ﾛｯﾋﾟｬｸ";
    } elseif($digit == 8 && $order == 3) {
      $add = "ﾊｯﾋﾟｬｸ";
    } elseif($digit == 1 && $order != 1) {
      $add = $order_name[$order];
    } elseif($digit == 0) {
      $add = "";
    } else {
      $add = $foolish[$digit] . $order_name[$order];
    }
    $ret .= $add;
    $order -= 1;
  }
  return $ret;
}
?>
