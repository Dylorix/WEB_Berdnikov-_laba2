<?php

header('Content-type: text/plain');

/* Imagine a lot of code here */

//1
$very_bad_unclear_name = "15 chicken wings";
$order = $very_bad_unclear_name;
$order.="scibididop";

// Write your code here:

echo "\n New order is: $order";

// Don't change the line below

echo "\n Your order is: $very_bad_unclear_name.";

//2
$variable = 24;
echo "\n Variable: $variable";
$secondVariable = 12;
echo "\n Second variable: $secondVariable";
$thirdVariable = 1.5;
echo "\n Third variable: $thirdVariable";
echo "\n", 12-0;

$last_month = 1187.23;
$this_month = 1089.98;
echo  "\nDifference:", $this_month-$last_month;

//11

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days/$num_languages;
echo "\nDays per language: $days_per_language";

//12

echo "\n", 8**2;

//13
$my_num = 24;
$answer = $my_num;
$answer +=2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo"\n$answer";

//14

//Математические функции
$a = 10;
$b = 3;
echo"\n",$a%$b;

$a = 4;
$b = 2;
if($a%$b===0)
{
    echo"\nДелится";
}
else
{
    echo"\nНе делится";
    echo"\n",$a%$b;
}

//Работа со степенью и корнем
$step = pow(2,10);
$kor = sqrt(245);
$arr = [4,2,5,19,13,0,10];
$sum = 0;
foreach($arr as $d)
{
    $sum+=pow($d,2);
}
$sum = sqrt($sum);
 
echo "\n$step\n$kor\n$sum";

// Работа с функциями округления
$kor2 = sqrt(379);
$roun1 = round($kor2);
$roun2 = round($kor2,1);
$roun3 = round($kor2,2);
echo "\n$roun1\n$roun2\n$roun3";
$kor3 = sqrt(587);
$array = ["floor"=>floor($kor3), "ceil"=>ceil($kor3)];
echo "\n{$array["floor"]} {$array["ceil"]}";

//Работа с min max
$nums = [4,-2,5,19,-130,0,10];
$max  = $nums[0];
$min = $nums[0];
foreach($nums as $d)
{
    $max = max($max,$d);
    $min = min($min,$d);
}

echo "\nmax: $max \nmin: $min";

//Работа с рандомом
$rand = rand(1,100);
echo "\nRandom number: $rand\n";

$randomarray=[];
for($i=0;$i<10;$i++)
{
    $randomarray[$i]=rand(1,100);
}

var_dump($randomarray);

//Работа с модулем
$a2 = 20;
$b2 = 190;
echo "\n Модуль разности:",abs($a2-$b2);

$mod=[1,2,-1,-2,3,-3];

foreach($mod as &$number)
{
    $number = abs($number);
}
echo"\n";
var_dump($mod);

//Общее
$num = 30;
$del=[];
$cnt =0;
for($i=1;$i<=$num;$i++)
{
    if($num%$i===0)
    {
        $del[$cnt]=$i;
        $cnt++;
    }
}
echo"\nДелители числа $num:\n";
var_dump($del);

$nums=[1,2,3,4,5,6,7,8,9,10];
$sum=0;
$count=0;

foreach($nums as $digits)
{
    if($sum===10)
    {
        break;
    }
    $sum+=$digits;
    $count++;
}

echo("\nНужно сложить $count первых элементов");

//15 Функции
function printStringReturnNumber()
{
    echo "\nFucnion!";
    return 24;
}
 $my_num = printStringReturnNumber();
 echo"\nВозвращаемое значение функции:$my_num";

 //16 Функции
 function increaseEnthusiasm(string $str)
 {
    return $str.="!";
 }
 $string = "vfrckjk";
 echo"\nВосклицание:",increaseEnthusiasm($string);

 function repeatThreeTimes(string $str)
 {
    $temp ="";
    $temp.=$str.=$str.=$str;
    return $temp;
 }

 $string1 = "nepvfrcbvf";
 echo"\nПовторение строки:", repeatThreeTimes($string1);


 function cut(string $str, $count = 10)
 { 
    $str1 = "";
	for($i = 0; $i < strlen($str); $i++) 
    {
		if ($i >= $count) 
        {
			break;
		} 
        else 
        {
			$str1 .= $str[$i];
		}
	}
	return $str1;
 }
 $test = "dzxcvbnm";
 echo "\nИзначальная строка: $test\nОбрезанная строка: ",cut($test,4);

 $recursiveArray = [1,2,36,123,12];
echo "\nМассив выведенный с помощью рекурсии:";
function foo($arr, $i)
{
    if($i < sizeof($arr))
    {
        echo "\n{$arr[$i]}";
        foo($arr, $i+1);
    }
    return 0;
}
foo($recursiveArray, 0);

function sumOfDigits($number)
{
    $summa = 0;

    while($number>0)
    {
        $summa+= (int)($number%10);
        $number= (int)($number/10);
    }

    if($summa>9)
    {
        sumOfDigits($summa);
    }
    else
    {
        echo $summa;
    }
}
$number = 21421;
echo "\nОдносложная сумма цифр:\n",sumOfDigits(21421),"\n";

//17 Массивы
$symbolicArray =[];
echo "\nМассив из иксов:\n";
function symbolic(&$arr,$n)
{
    $symbol = "";
    $count = 0;
    while($count!=$n)
    {
        $arr[$count] = $symbol.="x";
        $count++;
    }
}

symbolic($symbolicArray,4);
var_dump($symbolicArray);

function arrayFill($value,$n)
{
    $array=[];
    for($i = 0; $i<$n;$i++)
    {
        $array[$i] = $value;
    }
    return $array;
}

$testArray = arrayFill('x',5);
echo "\nСозданный массив:\n";
var_dump($testArray);

$twinArray = [[1,246,2,12],[21,0,12],[23,9]];
$sumOfTwinArray = 0;
for($i=0;$i<sizeof($twinArray);$i++)
{
    for($j =0;$j<sizeof($twinArray[$i]);$j++)
    {
        $sumOfTwinArray+=$twinArray[$i][$j];
    }
}

echo"\nСумма элементов двумерного массива:$sumOfTwinArray";

echo("\nСозданный двумерный массив:\n");
$doubleArray =[];
$i= 0;
$j=0;
$val =1;

while($i!=3)
{
    $j=0;
    while($j!=3)
    {
        $doubleArray[$i][$j] = $val;
        $val++;
        $j++;
    }
    $i++;
}
echo"\n";
var_dump($doubleArray);

$array1 = [2,3,5,9];
$result = $array1[0]*$array1[1] + $array1[2]*$array1[3];
echo"\n$result\n";

$user = ["name"=>"Дмитрий","surename"=>"Дилорикс","patronymic"=>"Миллер"];

echo $user["name"]," ", $user["surename"]," ", $user["patronymic"]," "; 

echo "\nДата: ";

$date = ["year"=> 2023,"month"=>4,"day"=>10];

echo $date["year"],"-0", $date["month"],"-0", $date["day"]; 


$arr = ['a','b','c','d','e'];

echo "\nКол-ов элементов в массиве: ", sizeof($arr);
echo "\nПоследний элемент массива: ", $arr[sizeof($arr)-1];
echo "\nПредпоследний элемент массива: ", $arr[sizeof($arr)-2];

//18 Кострукция if else

function compare($a,$b)
{
    return $a+$b>10;
}
$bool = compare(5,5);
echo "\n$bool" ;

function isEqual($a,$b)
{
    return $a===$b;
}

$bool = isEqual(5,6);
echo "\n$bool";


$test = 0;
echo (($test == 0) ? 'верно' : ''), "\n";

$age = 24;
if($age<10 || $age>99)
{
    echo "\nЧисло $age меньше 10 или больше 99";
}
else
{
    $summa = 0;
    while($age>0)
    {
        $summa+= (int)($age%10);
        $age= (int)($age/10);
    }
    if($age<=9)
    {
        echo "\nСумма цифр однозначна\n";
    }
    else
    {
        echo "\nСумма цифр двузначна\n";
    }
}

$arr= [1,21,31,24];

if(sizeof($arr)===3)
{
    var_dump($arr);
}
else
{
    echo "\nВ массиве не 3 элемента";
}


echo"\n";
//19 Циклы
$counter = 0;
$colum = "x";
while($counter !=20)
{
    echo $colum,"\n";
    $colum.="x";
    $counter++;
}

//20 Комбинация функций

$arr = [1,2,29,100];
echo "\nСреднее арифметическое элементов: ", array_sum($arr)/sizeof($arr);
$arr3= range(1,100);
echo "\nСумма чисел от 1 до 100: ", array_sum($arr3)/sizeof($arr3);

$arr = array(1,4,9,16,25);
$arr = array_map("sqrt", $arr);
echo "/n Корни элементов массива:\n";
var_dump($arr);

$keys = range('a', 'z');
$val = range(1,26);
$arr = array_combine($keys, $val);
echo "/n Ассоциатинвый массив:\n";
var_dump($arr);

$str = "1234567890";
$arr = str_split($str, 2);
$sum = array_sum($arr);
echo "\nИскомаая сумма: $sum";