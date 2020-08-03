<?php
// /*〜*/までは説明
/*function double($num) {
   $testtest = $num * 2;
   $testtest = $testtest * 2;
   return $testtest;
}
$test = double(150);
echo $test;
*/

//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double($num) {
    $test = $num * 2;
    return $test;
}
$test = double(1000);
echo $test;
echo "\n";

//$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
    $sum = $a + $b;
    return $sum;
}
$sumsum = f(1, 5);
echo $sumsum;
echo "\n";

//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function mult($arr){
   $result = 1;
   foreach($arr as $num){
       $result = $result * $num;
   }
   return $result;
  
}
$testtest = mult(array(1, 3, 5 ,7, 9) );
echo $testtest;
echo "\n";

//次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
$arr = [100, 200, 300, 400, 500];
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 //なぜ[0]を入れるのか？
 foreach($arr as $a){
 /*foreach (配列 as 一時変数) {
  要素1つに対して実行したい処理
}*/
    if($max_number < $a);
//ifの次に来る()内に条件を記述し、もしこの条件が満たされている場合は、次に書かれている{　}の中身が実行されます。
        $max_number = $a;
 }
 //もしmax_numberがaより小さかったら、aがmux_numberの値に代入される
 return $max_number;
 }
 echo max_array($arr);
 echo "\n";
 
 /*5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

strip_tags　...文字列から HTML および PHP タグを取り除く
array_push　...一つ以上の要素を配列の最後に追加する
array_merge ...ひとつまたは複数の配列をマージ(結合)する
time        ...現在の Unix タイムスタンプ(コンピューターのシステム時刻の一種で、協定世界時（UTC）での1970年1月1日（午前0時0分0秒）からの経過時間を指します。
               例えば、「６月11日12時2分」のUNIXタイムスタンプは「1528686124」と表示されます。)を返す
mktime      ...日付を Unix のタイムスタンプとして取得する
date　      ...ローカルの日付/時刻を書式化する
*/

//strip_tags
$html_code = "<html><body><title>Hello World!</title><p>おはよう</p></body></html>";
$html_code_result = strip_tags($html_code);
echo $html_code_result;
echo "\n";

//array_push
$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);
echo "\n";

//array_merge
$ary1 = ['りんご', 'なし', 'ぶどう'];
$ary2 = ['桃', '柿', '苺'];
$ary_marge = array_merge($ary1, $ary2);
print_r($ary_marge);
echo "\n";

//time
$timestampe = time() ;
echo $timestampe ;
echo "\n";

//mktime
echo  mktime();
echo "\n";

//date
echo date('Y-m-d');
echo "\n";
