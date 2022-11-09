<?php
  $htmlTitle = 'HomeWork PHP#2';
  include('./src/header.php');
  include('./src/function.php');

  //функция автодобавления Echo со вложенным тегом <p>
  //function add($text)
  
  //функция добавляющее заголовок "условие" со вложенным текстом
  //condition($text)
  
  //функция добавления начала и конца DIVа с авто-заголовком по запросу
  //task($arg), $arg = "start" или "end"

  task('start');
  condition('Сделайте функцию, которая возвращает куб числа. Число передается
  параметром.');
  $pow = fn($a) => add ('Число '.$a.' в 3-й степени = '.pow($a, 3));
  $pow(3);
  $pow(5);
  $pow(7);
  $pow(10);
  task('end');

  task('start');
  condition('Сделайте функцию, которая возвращает сумму двух чисел. Числа
  передаются параметрами функции.');
  $sum = fn($a, $b) => add($a.' + '.$b.' = '.$a + $b);
  $sum(1,3);
  $sum(1000,333);
  $sum(666,999);
  task('end');

  task('start');
  condition('Сделайте функцию, которая принимает параметром число от 1 до 7, а
возвращает день недели на русском языке.');
  $week = [
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресение',
];
  $weekday = function ($a) use ($week) {
    add($week[$a]);
  };
  for ($i = 1; $i <= 7; $i++) $weekday($i);
  task('end');

  task('start');
  condition('Сделайте функцию, которая параметром принимает число и проверяет -
  отрицательное оно или нет. Если отрицательное - пусть функция вернет true,
  а если нет - false.');
  function negativeNum ($a){
    return
    $a < 0 ?
    $a.' - отрицительное число': 
    $a.' - положительное число';
  }
  add(negativeNum(-5));
  add(negativeNum(5));
  task('end');

  task('start');
  condition('Сделайте функцию getDigitsSum (digit - это цифра), которая параметром
  принимает целое число и возвращает сумму его цифр.');
  function getDigitsSum($a){
    $a = (string)$a;
    $sum = 0;
    for ($i = 0; $i < strlen($a); $i++) $sum += $a[$i];
    return $sum;
  }
  add (getDigitsSum(55555));
  add (getDigitsSum(999));
  add (getDigitsSum(666));
  task('end');

  task('start');
  condition('Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого
  используйте вспомогательную функцию getDigitsSum из предыдущей задачи.');
  function yearSum13($a, $b){
    $arr = [];
    for ($a; $a <= $b; $a++){
      if (getDigitsSum($a) == 13) array_push($arr, $a);
    }
    add($a." - ".$b);
    echo '<div class="col-10">';
    for($i = 0; $i < count($arr); $i++){
      echo ("<p class='item'>{$arr[$i]}</p>");
    }
    echo '</div>';
  }
  yearSum13(1, 2020);
  yearSum13(2020, 3020);
  task('end');

  task('start');
  condition('Сделайте функцию isEven() (even - это четный), которая параметром
  принимает целое число и проверяет: четное оно или нет. Если четное - пусть
  функция возвращает true, если нечетное - false.');
  function isEven($a){
    return (!($a % 2)) ? add($a." - true") : add($a." - false");
  }
  echo '<div class="col-10">';
  for ($i = 1; $i < 100; $i++) isEven($i);
  echo '</div>';
  task('end');
  
  task('start');
  condition('Сделайте функцию, которая принимает строку на русском языке, а
  возвращает ее транслит.');
  
  task('end');

  include('./src/footer.php');
?>