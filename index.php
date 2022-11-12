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
  function countNumber($count, $one, $some, $more)
  {
      switch ($count) {
          case $count < 0:
          case 0:
            return "Нет ".$more;
          case 1:
            return $count." ".$one;
          case 2:
          case 3:
          case 4:
            return $count." ".$some;
          case $count >= 5:
            return $count." ".$more;
      }
  }
  for ($i = -2; $i <= 6; $i++){
    add(countNumber($i, 'яблоко', 'яблока', 'яблок'));
  }
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
      echo ("<p class='item'>".current($n)."</p>");
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
    //разделим оба слова на массивы, такая конструкция позволяет отловить кириллические символы
    for ($i = 0; $i < mb_strlen($word1, 'UTF-8'); $i++){
      array_push($arrWord1, mb_substr($word1, $i, 1, "UTF-8"));
    }
    for ($i = 0; $i < mb_strlen($word2, 'UTF-8'); $i++){
      array_push($arrWord2, mb_substr($word1, $i, 1, "UTF-8"));
    }
    $resArr = array_diff($arrWord2, $arrWord1);
    if (count($resArr) === 0){
      add("Ура! Из слова <b>\"{$word1}\"</b> можно составить <b>\"{$word2}</b>!");
    } else {
      add("Увы! Из слова <b>\"{$word1}\"</b> нельзя составить <b>\"{$word2}</b>!");
    }
  }
  wordPicker('караганда','ара');
  wordPicker('асфальт','кукуруза');
  wordPicker('Pen-Pineapple-Apple-Pen','Apple');
  wordPicker('Apple','Pen-Pineapple-Apple-Pen');
  wordPicker('полиморфизм','зло');
  wordPicker('зло','полиморфизм');
  wordPicker('полиморфизм','пиролиз');
  wordPicker('джомолунгма','гондола');
  task('end');

  task('start');
  condition('Палиндромом называют последовательность символов, которая читается
  как слева направо, так и справа налево. Напишите функцию по определению
  палиндрома по переданному параметру.');
  function palindrome($word)
  {
    $arrWord1 = [];
    $arrWord2 = [];
    $flag = true;
    //слово в массив
    for ($i = 0; $i < mb_strlen($word, 'UTF-8'); $i++){
      array_push($arrWord1, mb_substr($word, $i, 1, "UTF-8"));
    }
    //очистить выражение от "лишних" символов
    for ($i = 0; $i < count($arrWord1); $i++){
      switch($arrWord1[$i]){
        case " ":
        case ",":
        case  ",":
        case  ".":
        case  "!":
        case  "?":
          array_splice($arrWord1, $i, 1);
          $i = 0;
      }
    }
    $arrWord2 = array_reverse($arrWord1);
    //проверка: любое отличие переключает "флаг" на false
    for($i = 0; $i < count($arrWord1); $i++){
      if($arrWord1[$i] !== $arrWord2[$i]) {
        $flag = false;
      }
    }
    if ($flag){
      add("ДА, <b>\"{$word}\"</b> является палиндромом!");
    } else {
      add("НЕТ, <b>\"{$word}\"</b> НЕ является палиндромом...");
    }
  }
  palindrome('доход');
  palindrome('шалаш');
  palindrome('казак');
  palindrome('арбуз у зубра');
  palindrome('палиндром');
  palindrome('а роза упала на лапу азора');
  palindrome('лом о смокинги гни, комсомол!');
  palindrome('муза, ранясь шилом опыта, ты помолишься на разум.');
  task('end');

  task('start');
  condition('Создание функцию создания таблицы умножения в HTML-документе в
  виде таблицы с использованием соотв. тегов.');
  function multiplicationTable(){
    echo "<table>";
    for($a = 1; $a <= 10; $a++){
      echo "<tr>";
      for ($b = 1; $b <= 10; $b++){
        echo "<td>$a * $b = ".$a * $b."</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
  multiplicationTable();
  task('end');

  task('start');
  condition('Дана строка с текстом. Напишите функцию определения самого длинного
  слова.');
  function longLongWord ($str)
  {
    $arrStr = explode(' ', $str);
    $longWord = $arrStr[0];
    foreach ($arrStr as $word){
      if (mb_strlen($longWord) < mb_strlen($word)){
        $longWord = $word;
      }
    }
    return add("$str. <b>Самое длинное слово - $longWord</b>");
  }
  //слова с одинаковой длинной к сожалению не записываются
  longLongWord('1. Ахалай махалай');
  longLongWord('2.1. When Mr. Bilbo Baggins of 
    Bag End announced that he would shortly be 
    celebrating his eleventy-first birthday with 
    a party of special magnificence, there was 
    much talk and excitement in Hobbiton');
  longLongWord('2.2. Когда господин Бильбо Бэггинс из 
  Котомки объявил, что намерен в скором времени 
  отметить сто одиннадцатый день рождения и устроить 
  по этому поводу особо пышное торжество, – 
  Хоббитон загудел и заволновался');
  task('end');

  task('start');
  condition('Напишите функцию определения суммарного количества единиц в числах
  от 1 до 100.');
  function sumUnit($a, $b)
  {
      $sum = 0;
      for ($i = $a; $i <= $b; $i++) {
        $i = (string)$i;
        if (strpos($i, '1') !== false) {
            $sum++;
          }
      }
      add ("Сумма единиц в диапазоне от {$a} до {$b} = {$sum}");
  }
  sumUnit(666, 999);
  task('end');

  task('start');
  condition('Напишите функцию, которая разбивает длинную строку тегами br так,
  чтобы длина каждой подстроки была не более N символов. Новая подстрока
  не должна начинаться с пробела');
  $str = "
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor ornare dui, eu tempor velit laoreet et. Quisque mollis, diam vel mattis fringilla, libero lectus sollicitudin dui, ut venenatis elit libero et nunc. Nam in nisl euismod, mollis nisl sed, pharetra lorem. Pellentesque ornare sit amet sapien sed faucibus. Nam volutpat cursus tristique. Ut et metus ut libero commodo vestibulum id eu justo. Aliquam erat volutpat. Vivamus nec commodo nulla. Integer mi nisi, ultricies in ultricies ut, porttitor sed tellus. In sagittis tempor nibh, non congue augue pellentesque quis. Duis rhoncus diam vel mollis lacinia. Nulla euismod tincidunt arcu, fermentum faucibus ipsum ultrices a.
  Integer vitae justo volutpat, viverra nunc auctor, vestibulum nisl. Nunc in nulla lorem. Pellentesque congue in turpis at scelerisque. Nam vitae felis et enim finibus euismod. Aliquam ut diam non dui fringilla egestas sed a orci. Cras feugiat tortor mauris, eu tristique quam ultrices nec. Nunc et sollicitudin velit. Aenean congue pretium libero vitae blandit. Morbi vitae mattis turpis. Morbi posuere nulla sed dolor luctus egestas. Donec euismod massa a enim bibendum mollis. Praesent volutpat massa at neque rhoncus, in semper odio accumsan.
  Cras ornare est neque, non ultricies lorem interdum nec. Nullam scelerisque porttitor leo, rhoncus eleifend dui maximus eget. Maecenas a condimentum augue. Proin metus justo, tempor et malesuada at, volutpat vel elit. Donec ac urna sed odio sodales pulvinar. Donec arcu justo, ultrices eu vestibulum nec, consectetur et orci. In dictum purus diam, non pulvinar leo mattis at. Aenean eu pharetra diam. Pellentesque tellus orci, laoreet sit amet mollis consectetur, commodo nec dui. Curabitur ac sapien venenatis, pretium arcu ac, hendrerit ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
  ";
  //wordwrap
  $strLenght1 = function ($a) use ($str)
  {
    $str = wordwrap($str, $a, '<br>');
    add($str);
    add("&nbsp;");
  };
  $strLenght1(125);

  //chunk_split
  $strLenght2 = function ($a) use ($str)
  {
    $str = chunk_split($str, $a, '<br>');
    add($str);
    add("&nbsp;");
  };
  $strLenght2(125);

  //manual
  $strLenght3 = function ($a) use ($str)
  {
    $strArr = explode(' ', $str);
    $sum = 0;
    echo ("<p>");
    for ($i = 0; $i < count($strArr); $i++){
      $sum += (mb_strlen($strArr[$i]));
      if($sum < $a){
        $sum += mb_strlen($strArr[$i]) + 1;
        echo ($strArr[$i]." ");
      } else {
        echo ($strArr[$i]."<br>");
        $sum = 0;
      }
    }
    echo ("</p>");
  };
  $strLenght3(125);

  task('end');

  include('./src/footer.php');
?>