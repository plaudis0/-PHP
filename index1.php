<?php
//1 практика

// $arr = [
//     [
//         ['a', 'b'],
//         ['c','d'],
//     ],
//     [
//         ['e', 'f'],
//         ['g','h'],
//     ],
//     [
//         ['i', 'j'],
//         ['k','l'],
//     ],
// ];

// echo $arr[0][0][0];
// echo $arr[2][1][0];


//ЗАДАНИЕ 1 (2)
//   $arr = [
//     [
//       ['1', '2'],
//       ['3', '4'],
//     ],
//     [
//       ['5', '6'],
//       ['7', '8'],
//     ],
//   ];
// $sum = array_sum($arr[0][0])+(array_sum($arr[0][1])+array_sum($arr[1][0])+array_sum($arr[1][1]));
// echo $sum;


// $arr = [
//     'user1' => [
//         'name' => 'name1',
//         'age' => 31,
//     ],
//     'user2' => [
//         'name' => 'name2',
//         'age' => 32,
//     ],
// ];

// echo $arr['user2']['name'];



// ЗАДАНИЕ 2
//   $arr = [
//     'boys' => [ 1 => "john", 2 => "jack", 3 => "Rayn"],
//     'girls' => [ 1 => "Emma", 2 => "Lily", 3 => "Anna"],
//   ];
// echo $arr['boys'][1];
// echo $arr['girls'][2];
// 


// $arr = [
//   [ "name" => "user1", "age" => 30, "salary" => 1000],
//   [ "name" => "user2", "age" => 31, "salary" => 2000],
//   [ "name" => "user3", "age" => 32, "salary" => 3000],
// ];
// echo $arr[0]["salary"]+$arr[2]["salary"];

// $arr = [['a', 'b', [1,2,3], [4,5]], ['d', ['e', 'f']]];
// $arr = [['a', 'b', [1,2,3], [4,5],], ['d', ['e', 'f'],],];

// ЗАДАНИЕ 4
// $arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]];

// $sum = 0;

// $sum += $arr[0][0];         
// $sum += $arr[0][1];          
// $sum += $arr[0][2];          
// $sum += $arr[0][3][0];      
// $sum += $arr[0][3][1];     
// $sum += $arr[0][3][2][0];     
// $sum += $arr[0][3][2][1];     


// $sum += $arr[1][0];           
// $sum += $arr[1][1][0];     
// $sum += $arr[1][1][1];     

// echo $sum;



// $arr = [['a', 'b', 'c'], ['d', 'e', 'f'], ['g', 'h', 'i'],];
// foreach ($arr as $sub) {
//     foreach ($sub as $elem){
//         echo $elem;
//     }
// }

// ЗАДАНИЕ 5
// $arr = [[1,2,3], [4,5,6,7], [8,9]];
// $sum = 0;

// foreach ($arr as $a) {
//     foreach ($a as $b) {
//         $sum += $b;
//     }
// }
// echo $sum;



// $arr = [[['a', 'b'],['c','d'],], [['e', 'f'], ['g', 'h'],], [['i', 'j'], ['k', 'l'],],];
// foreach ($arr as $sub) {
//     foreach($sub as $subsub){
//         foreach ($subsub as $elem) {
//             echo $elem;
//         }
//     }
// }


//ЗАДАНИЕ 6
// $arr = [
//   [
//     [1,2,3],
//     [6,7,8],
//     [3,8,4],
//     [6,7,9],
//   ],
//   [
//     [9,1,2],
//     [4,5,6],
//   ],
//   [
//     [9,1,2],
//     [4,5,6],
//     [5,6,3],
//   ],
// ];
// $sum = 0;
// foreach ($arr as $a){
//   foreach ($a as $b){
//     foreach ($b as $c){
//       $sum += $c;
//     }
//   }
// }
// echo $sum;


// $arr = [
//     'user1' => ['name' => 'name1', 'age' => 31,],
//     'user2' => ['name' => 'name2', 'age' => 32,],
// ];
// foreach ($arr as $key1 => $sub) {
//     foreach ($sub as $key2 => $elem) {
//         echo $key1 . ' ' . $key2 . ' ' . $elem . '<br>';
//     }
// }


// ЗАДАНИЕ 7
// $arr = [
//   [
//     'name' => 'user1',
//     'age' => 30,
//     'salary' => 1000,
//   ],
//   [
//     'name' => 'user2',
//     'age' => 31,
//     'salary' => 2000,
//   ],
//   [
//     'name' => 'user3',
//     'age' => 32,
//     'salary' => 3000,
//   ],
// ];

// foreach ($arr as $subArr) {
//   foreach ($subArr as $value) {
//     echo $value.'<br>';
//   }
// }



// ЗАДАНИЕ 8


// #1
// $arr = [];
// for ($i = 0; $i < 5; $i++) {
//   for ($j = 0; $j < 5; $j++){
//     $arr[$i][$j] = $j+1;
//   }
// }
// var_dump($arr);


// #2
// $arr = [];
// for ($i = 0; $i < 5; $i++) {
//   for ($j = 0; $j < 5; $j++){
//     $arr[$i][$j] = $j='x';
//   }
// }
// var_dump($arr);


//#3
// $arr = [];
// for ($i = 0; $i < 5; $i++) {
//   for ($j = 0; $j < 5; $j++){
//     for ($u = 0; $u < 5; $u++){
//       $arr[$i][$j][$u] = $u+1;
//     }
//   }
// }
// var_dump($arr);



// $users = [
//     ['name' => 'user1', 'age' => 31, 'salary' => 1000,], ['name' => 'user2', 'age' => 32, 'salary' => 2000,], ['name' => 'user3', 'age' => 33, 'salary' => 3000,]
// ];
// foreach ($users as $user) {
//     echo $user['name'] . ': ' . $user['salary'] . '$, ' . $user['age'] . '<br>';
// }

// ЗАДАНИЕ 9
// $products = [
//   [
//     'name' => 'prod1',
//     'price' => 100,
//     'amount' => 5,
//   ],
//   [
//     'name' => 'prod2',
//     'price' => 200,
//     'amount' => 6,
//   ],
//   [
//     'name' => 'prod3',
//     'price' => 300,
//     'amount' => 7,
//   ],
// ];
// foreach ($products as $prod) {
//   echo $prod['name'] . ': ' . $prod['price'] . '$, ' . $prod['amount'] . '<br>';
// }
?>