<?php
//часть 1
//1
$a = 3;
$b = $a;
echo $b;

//2
$a = 10;
$b = 2;
$c = (($a+$b)/2); //среднее значение
echo (($a+$b)/$c). ',' .(($a-$b)/$c). ',' .(($a*$b)/$c). ',' .(($a/$b)/$c);

//3
$c = 15;
$d = 2;
$result = ($c+$d);
echo $result;

//4
$a = 10;
$b = 2;
$c = 5;
$d = (($a+$b+$c)/3); //среднее значение
$result = (($a+$b+$c)/$d);
echo $result;

//5
$a = 17;
$b = 10;
$c = ($a - $b);
$d = 17;
$result = ($c+$d);
echo $result;

//часть 2
//1

$text = 'Привет, мир!';
echo $text, 'Моя первая программа!';

//2
$text1 = 'Привет,';
$text2 = 'мир!';
echo $text1.$text2;

//3
$name = 'Катя';
echo 'Привет, '.$name;
$text = 'Новый текст';

//4
$age = 20;
$height = 190;
echo 'Мой возраст '.$age. '|'.'Мой рост'.$height;

//5
$text = 'abcde';
echo $text[0]. '' .$text[2]. '' .$text[4];

//часть 3
//1
$arr = [ 'a', 'b', 'c'];
var_dump($arr[0], $arr[1], $arr[2] );

//2
echo $arr[0]. '' .$arr[1]. '' .$arr[2];

//3
$arr = [ 'a', 'b', 'c', 'd'];
echo $arr[0]. '+' .$arr[1]. ', ' .$arr[2]. '+' .$arr[3]. ', ' .$arr[0]. '-' .$arr[3]. ', ' .$arr[0]. '/' .$arr[3];

//4
$arr = [2, 5, 3, 9];
$result = ($arr[0]*$arr[1]) + ($arr[2]*$arr[3]);
echo  $result;

//5
$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;
$arr[3] = 4;
$arr[4] = 5;
var_dump($arr);

//часть 4
//1
$arr = [ 'a' =>11, 'b'=>20, 'c'=>30];
echo $arr['c']. ' ' .$arr['a'+'b'+'c'];


//2
$arr = ['q3' => 12, 'r3' => 23, 'f3'=>34];
echo $arr['q3'] + $arr['r3'] + $arr ['f3'];

//3
$arr = ['Коля'=> '1000$', 'Вася'=> '500$', 'Петя'=>'200$'];
echo  $arr['Петя']. '' .$arr['Коля'];

//4
$month = [1=> 'Январь', 2=> 'Февраль', 3=>'март', 4=>'апрель', 5=>'май', 6=>'июнь', 7=>'июль', 8=>'август', 9=>'сентярбрь', 10=>'октябрь',11=>'ноябрь', 12=>'декабрь'];
echo  $month[9]. ' ' .$month[5];

//5
$day = 3;
$days = [1=> 'понедельник', 2=> 'вторник', 3=>'среда', 4=>'четверг', 5=>'пятница', 6=>'суббота', 7=>'воскресенье'];
echo $days[$day];


