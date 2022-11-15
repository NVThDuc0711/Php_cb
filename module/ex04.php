<?php 
// kiểm tra kiểu dữ liệu 
//1. kiểu dữ liệu int và float 
$age = 30.5 ; 
var_dump($age);
// ép kiểu 
$age = (int)$age;
var_dump($age);

echo '<hr>';
// 2. kiểu dữ liệu boolean
$bool = 0;
var_dump($bool);
//ép kiểu 
$bool = (bool)$bool ; 
var_dump($bool); // nếu 0 hoặc rỗng sẽ là false còn ngược lại là true
echo '<hr>';
// 3 . Kiểu dữ liệu string 
$str = 'Nguyễn Văn Thành Đức ';
var_dump($str);
echo '<hr>';
// 4. NULL 
$total = NULL ; 
var_dump($total);

$checkNull = is_null($total);
var_dump($checkNull);
echo '<hr>';
// 5. Mảng 
$Arr = ['1'];
var_dump($Arr);
// 6 . Object
$Obj = [
    'Duc'
];
$Obj=(Object)$Obj;
var_dump($Obj);
$Customer = new $Obj;
var_dump($Customer);
