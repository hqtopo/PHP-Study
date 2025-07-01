<?php
echo "Hello World！\n";
$var1 = "これは変数です";
echo $var1;
echo "\n";
echo $var1;
$var2 = "同じ変数を何度でも使用できます\n";
echo $var2;
echo $var2;
echo $var2;
$var2 = "変数は上書きが可能です\n";
echo $var2;
$str1 = '文字列1';
$str1 .= '文字列2';
echo $str1;
echo "\n";
$num1 = 5;
$num2 = 15;

if ($num1 < 10 && $num2 > 10) {
    echo "num1は10未満かつnum2は10より大きい\n";
}
if ($num1 < 10 || $num2 < 10) {
    echo "num1は10未満またはnum2は10未満\n";
}

// あいうえお
// このファイルはphp study.phpで実行できます
// これはコメントアウトです
// コメントアウトはプログラムとして認識されず自由に書くことができます。