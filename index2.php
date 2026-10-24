<?php 
//2 проктыко


// Задание 1
// $str = 'abcde';
// $num = mb_strlen($str);
// echo $num;

// Здаание 1.2
// $str = 'привет';
// $num = mb_strlen($str);
// echo $num;

// Здаание 1.3
// $password = 'притb';
// $password_str = mb_strlen($password);
// if ($password_str > 5 and $password_str <10) {
//   echo 'пароль подходит';
// } else {
//   echo 'придумайте новый пароль';
// }


// Задание 2
// $str = 'php';
// echo strtoupper($str)

// Задание 2.2
// $str = 'PHP';
// echo strtolower($str)

// Задание 2.3
// $str = 'london';
// echo ucfirst($str)

// Задание 2.4
// $str = 'London';
// $echo strtolower($str);

// Задание 2.5
// $str = 'london is the capitalof great britain';
// echo ucwords($str)

// Задание 2.6
// $str = 'LONDON';
// echo ucfirst(strtolower($str))

// Задание 2.7
// $str = 'ПРИВЕТ';
// echo mb_strtolower($str)

// Задание 2.8
// $str = 'привет';
// echo mb_strtoupper($str)



// Задание 3
// 3.1
// $str = 'html css php';
// $words = str_word_count($str, 1);

// foreach ($words as $word) {
//     echo $word . '<br>';
// }

// 3.2
// $str = 'abcdefgh';
// echo substr($str, -3);

// 3.3
// $str = 'http://example.com';
// if (str_starts_with($str, 'http://')) {
//     echo 'Строка начинается с http://';
// } else {
//     echo 'Строка НЕ начинается с http://';
// }

// 3.4
// $str = 'http://example.com';
// if (str_starts_with($str, 'http://') || str_starts_with($str, 'https://')) {
//     echo 'Строка начинается с http:// или https://';
// } else {
//     echo 'Отказано';
// }

// 3.5
// $str = 'image.png';
// if (str_ends_with($str, '.png')) {
//     echo 'Файл имеет .png';
// } else {
//     echo 'Отказано';
// }

// 3.6
// $str = 'photo.jpg';
// if (str_ends_with($str, '.png') || str_ends_with($str, '.jpeg')) {
//     echo 'Файл имеет допустимое расширение';
// } else {
//     echo 'Отказано';
// }

// 3.7
// $str = 'This is a long string';
// if (strlen($str) > 5) {
//     echo substr($str, 0, 5) . '...';
// } else {
//     echo $str;
// }

// 3.8
// $str = 'многобайтовые строки требуют особого подхода';
// echo (mb_split(' ', $str));

// 3.9
// $str = 'пример работы с кириллическими символами';
// $words = mb_split(' ', $str);

// echo $words[1] . PHP_EOL;
// echo $words[3];  



// Задание 4
// $str = 'document.pdf';
// $str_true = '.pdf';
// if (str_ends_with($str, $str_true)) {
//     echo 'Ок';
// } else {
//   echo 'Не ок';
// }

// 4.2
// $str = 'https://example.com';
// $str_true = 'https://';
// if (str_starts_with($str, $str_true)) {
//     echo 'Ок';
// } else {
//   echo 'Не ок';
// }

// 4.3
// $str = 'The bal bla fox';
// $str_true = 'fox';
// if (str_contains($str, $str_true)) {
//     echo 'Ок';
// } else {
//   echo 'Не ок';
// }

// 4.4
// $str = 'document.png';
// if (str_ends_with($str,'.png') || (str_ends_with($str,'.jpg' ))) {
//     echo 'Ок';
// } else {
//   echo 'Не ок';
// }
// 4.5
// $str = 'document@png.com';
// if (str_contains($str,'@') || (str_contains($str,'.com' ))) {
//     echo 'Ок';
// } else {
//   echo 'Не ок';
// }


// ЗАДАНИЕ 5
// 5.1
// $str = "abc abc abc";
// $position = strpos($str, 'b');
// echo $position;


//5.2
// $str = "abc abc abc";
// $position = strripos($str, 'b');
// echo $position;


//5.3
// $str = 'abc abc abc';
// echo strpos($str, 'b', 3); 


//5.4
// $str = 'aaa aaa aaa aaa aaa';
// $parts = explode(' ', $str, 3);

// $pos = strlen($parts[0]) + 1 + strlen($parts[1]);
// echo $pos;


//5.5
// $str = 'example..com';

// if (mb_strpos($str, '..', 0, 'UTF-8') !== false) {
//     echo 'есть две точки подряд';
// }
// else echo 'Отказано';


//5.6
// $str = 'http://example.com';

// if (str_starts_with($str, 'http://') || str_starts_with($str, 'https://')) {
//     echo 'строка начинается на хттп://';
// }


// ЗАДАНИЕ 6
// 6.1
// $str = 'aaa bbb ccc';
// $words = explode(' ', $str);
// print_r($words);

//6.2.
// $arr = ['a', 'b', 'c', 'd', 'e'];
// $result = implode(',', $arr);
// echo $result;

//6.3.
// $str = '1234567890';
// $arr = str_split($str, 2);
// print_r($arr);


//6.4.
// $str = '1234567890';
// $arr = str_split($str, 1);
// print_r($arr);


//6.5.
// $str = '1234567890';
// $result = chunk_split($str, 2, '-');
// echo $result;

//6.6.
// $date = '2024-05-10';
// $newDate = implode('.', array_reverse(explode('-', $date)));
// echo $newDate;

//6.7.
// $str = 'word@word@word@word';
// $result = mb_split('@', $str, -1);
// print_r($result);


//6.8. 
// $str = 'программирование';
// $chars = mb_str_split($str, 1);
// print_r($chars);

//6.9.
// $str = 'кириллица';
// $parts = mb_str_split($str, 2);
// print_r($parts);


// Задание 7
// $str  =  '  srkoka  ';
// echo trim($str)

// 7.2
// $str  =  '/php/';
// echo trim($str, "/")

// 7.3
// $str  =  'text text text.';
// echo rtrim($str, ".") . "."


// ЗАДАНИЕ 8
//8.1
// $price = 19.99;
// echo "price: " . number_format($price, 2) . "$";

//8.2.
// $name = 'John';
// $age = 25;
// echo "Name: ".$name.", Age: ".$age," years";

//8.3.
// $name = "John";
// $score = 95;
// echo "student ".$name." scored ".$score." points";


//8.4.
// $product = "Laptop";
// $price = 1299.99;
// $discount = 15;

// echo "Product: ".$product." | Price: $".$price." | Discount: ".$discount."%";


//8.5.
// $x = 10;
// $y = 20;
// $z = 30;
// $sum = $x + $y + $z;
// echo "Sum: ".$x. "+" .$y. "+" .$z. '=' .$sum;



// ЗАдание 9
// $str = "12345678";
// echo number_format($str, 0, " ", " ");

// 9.2
// $str = "9876543.21";
// echo number_format($str, 2, '.', ' ');

// 9.3
// $str = "1234.5678";
// echo  '€'. number_format($str, 2, ',', '.');


// задание 10
//10.1
// $str = '12345';
// echo strrev($str);


//10.2

// $str = 'палиндромом';
// $reversed = strrev($str);

// if ($str === $reversed) {
//     echo "$str — палиндром";
// } else {
//     echo "$str — не палиндром (обратная строка: $reversed)";
// }

// ЗАДАНИЕ 11
// $str = "x";
// for ($i=1; $i<=9; $i++) 
// {
//   echo str_repeat($str, $i)."<br>";
// }


// 11.2
// for ($i=1; $i<=9; $i++) 
// {
//   echo str_repeat($i, $i)."<br>";
// }


//ЗАДАНИЕ 12
//12.1
// $str = "aaa <b>bbb</b> ccc";
// echo strip_tags($str);


//12.2
// $str = '
//   <p>aaa</p>
//   <b>bbb</b>
//   <s>ccc</s>
//   <i>ddd</i>
// ';
// echo strip_tags($str,'<b><i>');

//12.3.
// $str = 'aaa <b>bbb</b> <i>ccc</i>';
// echo htmlspecialchars($str);


//12.4
// $str = 'abracadabra';
// $counts = count_chars($str, 1);
// foreach ($counts as $code => $count) {
//     echo chr($code) . ' встречается ' . $count . ' раз(а)' . PHP_EOL;
// }


// Задание 13
// 13.1
// $str = 'ab-cd-ef';
// $result = strchr($str, '-');

// if ($result !== false) {
//     echo $result;
// } else {
//     echo '- не найден';
// }


//13.2
// $str = 'ab-cd-ef';
// $result = strrchr($str, '-');
// echo $result;

//13.3
// $str = 'ab--cd--ef';
// $result = strstr($str, '--');
// if ($result !== false) {
//     echo $result;
// } else {
//     echo 'Подстрока не найдена';
// }

//13.4
// $str = 'программирование-на-php';
// $result = mb_strrchr($str, '-', false, 'UTF-8');
// if ($result !== false) {
//     echo $result;
// } else {
//     echo '- не найден';
// }

// 13.5
// $str = 'Привет-Мир-Пока';
// echo mb_strrichr($str, 'Мир', false, 'UTF-8'); 

//13.6
// $str = 'Функции-для-работы-со-строками';
// echo mb_strstr($str, 'работы', false, 'UTF-8'); 

// 13.7
// $str = 'ппп ррр ссс ттт ууу';
// echo mb_stristr($str, 'ррр', false, 'UTF-8');

//13.8
// $str = 'Тестирование-многобайтовых-функций';
// echo mb_strrchr($str, '-', false, 'UTF-8');

//13.9
// $str = 'Пример-Поиска-Подстроки-В-Тексте';
// echo mb_strrichr($str, 'тексте', false, 'UTF-8');
 ?>