<?php
// Làm việc với class và object
//Tạo class tên calculator gồm 4 phép tính : cộng , trừ , nhân chia 
class Calculator{
    //khai báo dữ liệu
    public $numberA  ;
    public $numberB ; 
    public $numberC ; 
    //khai báo hằng số 
    const _MESSAGE_VALUE = 'Value : {value}'; 
    // khai báo phương thức 

   
    public function makeAdd($value1,$value2)
    {
        return $value1 + $value2 ;
    }

    public function makeSub($value1,$value2)
    {
        return $value1 - $value2 ;
    }

    public function makeMulti($value1,$value2)
    {
        return $value1*$value2 ;
    }
    public function makedivi($value1,$value2)
    {
        return $value1/$value2 ;
    }
    public function show($msg,$value)
    {
        return str_replace('{value}',$value,$msg);
    }
}

$calc = new Calculator();

$msg = $calc::_MESSAGE_VALUE;
//echo $calc->show($msg,$calc->makeAdd(2,6));
