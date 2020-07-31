<?php
echo 'hello php!' . "\n";

/*
$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。
*/


$name = "さち";
if ($name == "さち") {
    //$nameをさちか他の名前に変えて実行するとターミナルに表示される答えが変わる。
    //echo "私は $name です";
    echo '私は ' . $name . ' です';
}else{
    echo "$name ではありません";
}
echo "\n";
/*
for文を使って、1から10000までの合計の値を表示してください。
*/
$total = 0;
//echo $total;
//０の呼び出しは要らないので、↑のechoは不要。
for ($i = 1; $i<= 10000; $i++) {
    //echo $i . "\n";
    //↑足し算の履歴を表示できる　 「変数. "\n";」で改行できる。下にだけ書けばOK
    $total += $i;
}
echo $total . "\n";

//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("apple", "orange", "lemon", "grape", "peach");
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}
//応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
//下記、課題プログラム
/* for文の始めの値を定義する */
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}