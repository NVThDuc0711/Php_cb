
<?php 
require_once 'classes/Calculator.php';

$calc = new Calculator ; 
//I. Kiểm tra thuộc tính tồn tại 
//Cách 1 : Kiểm tra bằng hàm isset() hoặc empty 
if(isset($calc->numberC)){
    var_dump($calc->numberC) ;
}
else {
    echo 'Property not exist';
}
//Cách 2 : kiểm tra bằng hàm property_exits()
if(property_exists('Calculator','numberC'))
{
    var_dump($calc->numberC) ;
}
else{
    echo 'Thuộc tính không tồn tại';
}
//II. Kiểm tra phương thức tồn tại 
if(method_exists($calc,'makeAdd'))
{
    echo $calc->makeAdd(6,7);
}
else{
    echo 'Phương thức không tồn tại';
}