<?php
// Q1 tic-tac問題
for ($i = 1; $i < 101; $i++) {
  if ($i % 20 == 0) {
    echo 'tic-tac' . "\n";
  } elseif ($i % 4 == 0) {
    echo 'tic' . "\n";
  } elseif ($i % 5 == 0) {
    echo 'tac' . "\n";
  } else {
    echo $i . "\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
var_dump($personalInfos);
echo $personalInfos[1]['name'] . 'の電話番号は' .  $personalInfos[1]['tel'] . 'です。';

foreach($personalInfos as $index => $detail) {
    echo  $index + 1 . '番目の' . $detail['name'] . 'さんのメールアドレスは' . $detail['mail'] . 'で、電話番号は' . $detail['tel'] . 'です。' . "\n";
}

$ageList = [25, 30, 18];
foreach($personalInfos as $index => $detail) {
  $personalInfos[$index]['age'] = $ageList[$index];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
        echo $this->studentName . 'は' . $lesson . 'の授業に参加しました。学籍番号:' . $this->studentId ;
    }
}
$yamada = new Student(120, '山田');
echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

// Q4 オブジェクト-2
$yamada->attend('PHP');

// Q5 定義済みクラス
$date1 = new DateTime('2021-03-02');
$date1->modify('-1 month');
echo $date1->format('Y-m-d');

$date2 = new DateTime('1992-04-25');
$difference = $date1->diff($date2);
echo 'あの日から' . $difference->days . '日経過しました。';




?>