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
    for ($i = 0; $i < strlen($a); $i++){
      $sum += $a[$i];
    }
    add('Число: '.$a.'; Cумма: '.$sum);
  }
  getDigitsSum(55555);
  getDigitsSum(999);
  getDigitsSum(666);
  task('end');

  include('./src/footer.php');
?>