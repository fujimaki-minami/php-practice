<?php
// Q1 変数と文字列
$name = '藤巻';

echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;

var_dump($num);
var_dump($num / 2);

// Q3 日付操作
$theTime = date('Y年m月d日 H時i分s秒');

echo '現在の時刻は、' . $theTime . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows') {
  echo '使用OSは' . $device . 'です。';
} else {
  if ($device === 'mac') {
    echo '使用OSは' . $device . 'です。';
  } else {
    echo 'どちらでもありません。';
  }
}

// Q5 条件分岐-2 三項演算子
$age = 24;
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;

// Q6 配列
$kantoRegion = ['東京都', '神奈川県', '群馬県', '栃木県', '千葉県', '茨城県', '埼玉県'];

echo $kantoRegion[3] . 'と' . $kantoRegion[4] . 'は関東地方の都道府県です。';

// Q7 連想配列-1'
$countySeat = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach ($countySeat as $cityName) {
  echo $cityName . "\n";
}

// Q8 連想配列-2
foreach ($countySeat as $areaName => $cityName) {
  if($cityName === 'さいたま市') {
    echo $areaName . 'の県庁所在地は、' . $cityName . 'です。';
  }
}

// Q9 連想配列-3
$countySeat['愛知県'] = null;
$countySeat['大阪府'] = null;
foreach ($countySeat as $areaName => $cityName) {
  if($cityName != null) {
    echo $areaName . 'の県庁所在地は、' . $cityName . 'です。' . "\n";
  } else {
    echo $areaName . 'は関東地方ではありません。' . "\n";
  }
}

// Q10 関数-1
function hello($name) {
  return $name . 'さん、こんにちは。' . "\n";
}
echo(hello('金谷'));
echo(hello('安藤'));

// Q11 関数-2
$price = 1000;
function calcTaxInPrice($price) {
  return $price * 1.1;
}
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . 'です。';

// Q12 関数とif文
function distinguishNum($num) { 
  if ($num % 2 == 0) {
    return $num . 'は偶数です。' . "\n";
  } else {
    return $num . 'は奇数です。' . "\n";
  }
}
echo(distinguishNum(11));
echo(distinguishNum(24));

// Q13 関数とswitch文
function evaluateGrade($grade) {
  switch ($grade) {
    case 'A':
    case 'B':
      return '合格です。' . "\n";
      break;

    case 'C':
      return '合格ですが追加課題があります。' . "\n";
      break;

    case 'D':
      return '不合格です。' . "\n";
      break;

    default:
        return '判定不明です。講師に問い合わせてください。' . "\n";
        break;
  }
}
echo(evaluateGrade('A'));
echo(evaluateGrade('F'));

?>