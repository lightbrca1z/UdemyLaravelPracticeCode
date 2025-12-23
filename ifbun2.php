<?php

// if(条件){
// 　条件が真なら処理
// }

$height = 90;

if($height === 91){
    echo '身長は'.$height.'cmです';
}else{
    echo '身長は'.$height.'cmではありません';
}
// == 一致。
// === 型も一致。　90と'90'は、一致しない。

//☆
$signal = 'blue';

echo '<br>';

if($signal === 'red'){
    echo '止まれ！';
}else if($signal === 'yellow'){
    echo '一旦停止';
}else{
    echo '進む';
}

echo '<br>';
$speed = 80;

if($signal === 'blue'){
    if($speed >= 80){
        echo 'スピード違反です';
    }else{
        echo '速度は正常です';
    }
}

echo '<br>';

$test = 'test';

if(empty($test)){
    echo '変数は、空です';
}else{
    echo '変数は、空ではありません';
}

//andとor

echo '<br>';

$signal_1 = 'red';
$signal_2 = 'blue';

if($signal_1 === 'red' && $signal_2 === 'blue'){
    echo '赤と青です！';
}

echo '<br>';

if($signal_1 === 'red' || $signal_2 === 'blue'){
    echo '赤または青です！';
}

//三項演算子
// 条件 ? 真の場合 : 偽の場合;

echo '<br>';

$math = 80;

$comment = $math >= 80 ? '合格' : '不合格';

echo $comment;
?>