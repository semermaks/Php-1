<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
$php = "php";
echo strtoupper($php);
echo "<br/>";

$PHP = "PHP";
echo strtolower($PHP);
echo "<br/>";

$london = "london";
echo ucfirst($london);
echo "<br/>";

$London = "London";
echo lcfirst($London);
echo "<br/>";

$LITCOGB = "london is the capital of great britain";
echo ucwords($LITCOGB);
echo "<br/>";

$LONDON = "LONDON";
echo ucfirst(strtolower($LONDON));
echo "<br/>";
echo "<hr>";

$hcp = "html css php";
echo strlen($hcp);
echo "<br/>";

$password = "1234567";
if(strlen($password) >5 && strlen($password) < 10) echo "password подходит";
else echo "password не подходит";
echo "<br/>";

$arrhcp = [substr($hcp, 0, 5), substr($hcp, 5, 3), substr($hcp, 8, 4)];

echo $arrhcp[0]. $arrhcp[1]. $arrhcp[2];
echo "<br/>";

echo substr($hcp, -3);
echo "<br/>";

$siteExample = "http://www.youtube.com//";
if(substr($siteExample, 0, 7) == "http://") echo "да";
    else echo "нет";
echo "<br/>";

$siteExample2 = "https://www.youtube.com//";
if(substr($siteExample, 0, 7) == "http://" || substr($siteExample, 0, 8) == "https://") echo "да";
    else echo "нет";
echo "<br/>";


$pngExample = "max.png";
if(substr($pngExample, -4) == ".png") echo "да";
    else echo "нет";
    echo "<br/>";

    $substr2 = "max.jpg";
    if(substr($pngExample, -4) == ".png" || substr($pngExample, -4) == ".jpg") echo "да";
        else echo "нет";
    echo "<br/>"; 

$longStr = "hgjlowapdkwad";

if(strlen($longStr) >5) echo substr($longStr, 0, 5)."...";
else  echo $longStr;
echo "<br/>"; 
echo "<hr>";

$date = "31.12.2013";
echo  str_replace('.', '-', $date);
echo "<br/>"; 

$str = "abcabccabc";
echo  str_replace('c', '3', str_replace('b', '2', str_replace('a', '1', $str)));
echo "<br/>"; 

$str2 = '1a2b3c4b5d6e7f8g9h0';
$numarr = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];
echo  str_replace($numarr, '', $str2);
echo "<br/>"; 
echo "<hr>";

$str = "abcabccabc";
echo  strtr($str, array("a" => "1", "b" => "2","c" => "3"));
echo "<br/>"; 
echo  strtr($str, "a b c", "1 2 3");
echo "<br/>"; 
echo "<hr>";

echo substr_replace($str, "!!!", 3, 5);
echo "<br/>";  
echo "<hr>";

$abc = 'abc abc abc';
echo strpos($abc, 'b');
echo "<br/>"; 
echo strrpos($abc, 'b');
echo "<br/>"; 
echo strpos($abc, 'b', 3);
echo "<br/>"; 
$aaa = 'aaa aaa aaa aaa aaa';
echo strpos($abc, ' ', 4);
echo "<br/>"; 

$dots = "dwanhudiwahudaw..dwiajdiow";
if(strpos($dots, '..') !== false) echo "есть";
else echo "нету";
echo "<br/>"; 

$siteExample = "htt://awdwadwwa";
if(strpos($siteExample, "http://") == 0) echo "да";
else echo "нет";
echo "<br/>";   
echo "<hr>";

$arr = explode(' ', $hcp);
print_r($arr);
echo "<br/>";  

echo implode(' ', $arr);
echo "<br/>";  

$date2 = "31-12-2013";
echo implode('.', explode('-', $date2));
echo "<br/>";   
echo "<hr>";

$strnum =  '1234567890';
print_r(str_split($strnum, 2));
echo "<br/>"; 
print_r(str_split($strnum, 1));
echo "<br/>"; 

echo  implode('-', str_split($strnum, 2));
echo "<br/>";   
echo "<hr>";

$php =  '/php/';
echo trim($php, '/');
echo "<br/>"; 

$str = 'слова слова слова.';
echo rtrim($str, '.').".";
echo "<br/>";   
echo "<hr>";

$strnum2 = "12345";
echo strrev($strnum2);
echo "<br/>";  

$palindrom = "level";
if($palindrom == strrev($palindrom)) echo $palindrom." Это палиндром";
else echo $palindrom." Это не палиндром";
echo "<br/>";   
echo "<hr>";

$rndstr = "qwertyuioopasdfklzcvm";
echo  substr(str_shuffle($rndstr), 0, 5);
echo "<br/>";   
echo "<hr>";

$numberFormat =  '12345678';
echo number_format($numberFormat, 0, 3, ' ');
echo "<br/>";   
echo "<hr>";

$star = "*";

for ($i=0; $i < 10; $i++) { 
    echo str_repeat($star, $i)."<br/>";
}

echo "<br/>";
for ($i=0; $i < 10; $i++) { 
    echo str_repeat($i, $i)."<br/>";
}
echo "<br/>";   
echo "<hr>";

$tags =  'html, <b>php</b>, js';
echo strip_tags($tags);
echo "<br/>"; 

echo strip_tags($tags, '<b>, <i>');
echo "<br/>"; 

$str = 'html, <b>php</b>, js';
echo strip_tags($tags);
echo "<br/>";   
echo "<hr>";

echo chr(33);
echo "<br/>"; 

echo chr(73);
echo "<br/>"; 

$len = 10;
$str = '';
for ($i=0; $i < $len; $i++) { 
    $str .= chr(rand(65,122)) ;
}
echo $str;
echo "<br/>"; 

$letter = "b";
if(ord($letter) >= 65 && ord($letter) <= 90) echo "Its big";
else if(ord($letter) >= 97 && ord($letter) <= 122) echo "Its small";
else echo "It isn`t letter";
echo "<br/>";   
echo "<hr>";

$str = 'ab-cd-ef';
echo strchr($str, '-');
echo "<br/>"; 
echo strrchr($str, '-');
echo "<br/>";   
echo "<hr>";

$str = 'ab--cd--ef';
echo strstr($str, '-');
echo "<br/>";  
echo "<hr>";

$str =  'var_test_text';
$arr = explode('_', $str);
$result = '';
foreach ($arr as $value) {
    $result .= ucfirst($value);
}
echo(lcfirst($result));
echo "<br/>"; 

$arr = array("1", "3", "43", "12", "98", "34");
$result = '';
foreach ($arr as $value ) {
    if(strpos($value, '3') !== false )   $result .= $value ." ";
}
echo($result);
echo "<br/>"; 
?>
</body>
</html>