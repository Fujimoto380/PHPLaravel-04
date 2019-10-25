<?php
function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++) {
        $result += $i;
    }
    return $result;
}
echo sum(150)."\n";

// 課題1
function double($double) {
    $double *= 2;
    return $double;
}
echo double(150)."\n";

// 課題2
function f($a, $b){
    return $a + $b;
}
echo f(2, 5)."\n";

// 課題3
function murti($arr) {
    $total = 1;
    foreach($arr as $murti) {
        $total *= $murti;
    }
    return $total;
}
echo murti(array(1, 3, 5 ,7, 9))."\n";

// 課題4
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(4, 5, 2, 9, 1))."\n";

// 課題5

// strip_tags
$text = '<h1>課題5 strip_tags</h1>';
echo strip_tags($text)."\n";

// array_push
$olympic = array("水泳", "陸上", "バドミントン");
echo array_push($olympic, "サッカー", "フェンシング");
print_r($olympic);

// array_merge
$array01 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$array02 = array(11, 12);
$join = array_merge($array01, $array02);
print_r($join);

// time date
//現在の日時を取得
echo "今日 ".date('Y/m/d', time())."\n";

// mktime date
// 明日を取得
$yesterday = date('Y/m/d', mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')));
echo "明日 ".$yesterday;