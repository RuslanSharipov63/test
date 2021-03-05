<?php

echo 'task 1'.'<br>';

$a = 'Нужно соблюдать как минимум три правила. Первое - нельзя разглашать 
конфиденциальную информацию, особенно "сотрудникам банка". Реальные работники 
финансовых организаций никогда не запрашивают реквизиты, пин-коды и цифры на 
оборотной стороне карты, а также пароли из СМС-сообщений. Кроме того, они не 
просят установить программы удаленного доступа на телефон, перевести деньги на "защищенный счет". 
Банк звонит клиентам только для консультаций по своим продуктам и услугам.';

$link = 'https://sova.info/news/samartsam-rasskazali-kak-uberech-svoi-dengi-ot-moshennikov/';

$b = substr($a, 0, 180).'...';
$c = explode(' ', $b);
$d = array_reverse($c);
for($i = 0; count($d) > $i; $i++) {
    $out = $d[2].' ';
    $out .= $d[1].' ';
    $out .= $d[0];
}

$f=array_splice($c, 0, -3);

$g = implode(' ', $f);
echo $g.'<a href="'.$link.'">'.$out.'</a>';

?>



<?php

echo '<hr>';

echo 'Task 2'.'<br>';

$imagePath = __DIR__.'/moun.png';
$image = imagecreatefrompng($imagePath);
$size = getimagesize($imagePath);
$width = $size[0];
$height = $size[1];
$new_w = 200;
$new_h = 100;
$tmp = imagecreatetruecolor($new_w, $new_h);
$newimage = 'newimage.png';
imagecopyresampled($tmp, $image, 0, 0, 0, 0, $new_w, $new_h, $width, $height);
imagepng($tmp, $newimage);


imagedestroy($image);
echo '<img src="newimage.png">';
?>

<?php

echo '<hr>';

echo 'Task 3'.'<br>';

echo "Запрос: SELECT * FROM a, b WHERE a.id=b.a_id; выведет все строки таблиц a и b, где строка id таблицы a равна строке a_id таблицы b".'<br>';
echo "Запрос: SELECT * FROM a JOIN b ON a.id=b.a_id; выведет все строки таблицы a, где id равно строке a_id таблицы b";
?>

<?php

echo '<hr>';

echo 'Task 4'.'<br>';

$arr = array (1, 1, 2, 3, 4 -51, 12, 12, 12, -51);
$arr2 = array_chunk($arr, 2);

$counter = 0;

foreach($arr2 as $k => $v)
{
   if(isset($v[1]) AND $v[0] == $v[1]) {
       $counter++;
   } 

}

   echo $counter; 

?>