<?php
  $htmlTitle = 'HomeWork PHP#3';
  $htmlTheme = 'Функции';
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
  $weekday = function ($a) use ($week) 
  {
    add($week[$a]);
  };
  for ($i = 1; $i <= 7; $i++) $weekday($i);
  task('end');

  task('start');
  condition('Сделайте функцию, которая параметром принимает число и проверяет -
  отрицательное оно или нет. Если отрицательное - пусть функция вернет true,
  а если нет - false.');
  function negativeNum ($a)
  {
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
  function getDigitsSum($a)
  {
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
  function yearSum13($a, $b)
  {
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
  function isEven($a)
  {
    return (!($a % 2)) ? add($a." - true") : add($a." - false");
  }
  echo '<div class="col-10">';
  for ($i = 1; $i < 100; $i++) isEven($i);
  echo '</div>';
  task('end');
  
  task('start');
  condition('Сделайте функцию, которая принимает строку на русском языке, а
  возвращает ее транслит.');
  function translit($value)
  {
	  $converter = array(
      'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
      'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
      'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
      'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
      'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
      'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
      'э' => 'e',    'ю' => 'yu',   'я' => 'ya',

      'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
      'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
      'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
      'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
      'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
      'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
      'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
	  );
    $value = strtr($value,$converter);

    return $value;
  }
  add("Марков Андрей Валерьевич");
  add("Родился 01.11.1993 г.");
  add("Стремится быть супер-пупер крутым айтишником!");
  add("Тест - Шчучынщына");
  add("&nbsp;");
  add(translit("Марков Андрей Валерьевич"));
  add(translit("Родился 01.11.1993 г."));
  add(translit("Стремится быть супер-пупер крутым айтишником!"));
  add(translit("Тест - Шчучынщына"));
  task('end');

  task('start');
  condition('Сделайте функцию, которая возвращает множественное или единственное
  число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция
  первым параметром принимает число, а следующие 3 параметра — форма
  для единственного числа, для чисел два, три, четыре и для чисел, больших
  четырех, например, func(3, "яблоко", "яблока", "яблок").');
  add('???');
  task('end');

  task('start');
  condition('Дан массив с числами. Выведите последовательно его элементы
  используя рекурсию и не используя цикл.');
  //поменять на рекурсию, желательно обе функции
  $arr = [];
  for ($i = 666; $i <= 999; $i++) array_push($arr, $i);
  function arrRecursion ($n)
  {
    if(current($n)){
      add(current($n));
      next($n);
      arrRecursion($n);
    }
  }
  echo '<div class="col-10">';
  arrRecursion($arr);
  echo '</div>';
  task('end');

  task('start');
  condition('Дано число. Сложите его цифры. Если сумма получилась более 9-ти,
  опять сложите его цифры. И так, пока сумма не станет однозначным числом
  (9 и менее).');
  function sumRecursion($a)
  {
    if ($a > 9){
      add ($a." преобразовано в ");
      $a = (string)$a;
      $sum = 0;
      for ($i = 0; $i < strlen($a); $i++){
        $sum += (int)$a[$i];
      }
      $a = $sum;
      sumRecursion($a);
    } else {
      add ($a);
      echo "<br>";
    }
  }
  sumRecursion(mt_rand(999,99999999999));
  sumRecursion(mt_rand(999,99999999999));
  sumRecursion(mt_rand(999,99999999999));
  task('end');

  task('start');
  condition('Рассчитать скорость движения машины и выведите её в удобочитаемом
  виде. Осуществить возможность вывода в км/ч, м/c. Представить решение
  задачи с помощью одной функции.');
  function speed($distance, $time, $type)
  {
    $speed = $distance / $time;

    return "$distance пройденные за $time равно $speed $type";
  }
  add(speed(1000, 10, 'км/ч'));
  task('end');

  task('start');
  condition('Даны 2 слова, определить можно ли из 1ого слова составить 2ое, при
  условии что каждую букву из строки 1 можно использовать только один раз.');
  function wordPicker($word1, $word2)
  {
    $arrWord1 = [];
    $arrWord2 = [];
    //разделим оба слова на массивы, такакя конструкция позволяет отловить кириллические символы
    for ($i = 0; $i < mb_strlen($word1, 'UTF-8'); $i++){
      array_push($arrWord1, mb_substr($word1, $i, 1, "UTF-8"));
    }
    for ($i = 0; $i < mb_strlen($word2, 'UTF-8'); $i++){
      array_push($arrWord2, mb_substr($word2, $i, 1, "UTF-8"));
    }
    //
    $resArr = array_diff($arrWord2, $arrWord1);
    if (count($resArr) === 0){
      add("Ура! Из слова \"{$word1}\" можно составить \"{$word2}\"!");
    } else {
      add("Увы! Из слова \"{$word1}\" нельзя составить \"{$word2}\"!");
    }
  }
  wordPicker('караганда','ара');
  wordPicker('асфальт','кукуруза');
  wordPicker('Pen-Pineapple-Apple-Pen','Apple');
  wordPicker('Apple','Pen-Pineapple-Apple-Pen');
  task('end');

  include('./src/footer.php');
?>