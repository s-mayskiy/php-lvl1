<?php 
// Задание 1 -->
    $a = random_int(-100, 100);
    $b = random_int(-100, 100); 

    if ($a >= 0 && $b >= 0) {
        echo $a - $b;
    } elseif ($a < 0 && $b < 0) {
        echo $a*$b;
    } elseif (($a >= 0 && $b <0) || ($a < 0 && $b >= 0)) {
        echo $a+$b;
    }
    echo PHP_EOL.PHP_EOL;
// Задание 1 <--    

// Задание 2 -->
$a = random_int(0, 15);    

switch ($a) {
    case 0:
        echo $a++.' ';
    case 1:
        echo $a++.' ';
    case 2:
        echo $a++.' ';        
    case 3:
        echo $a++.' ';
    case 4:
        echo $a++.' ';            
    case 5:
        echo $a++.' ';
    case 6:                      
        echo $a++.' ';
    case 7:                      
        echo $a++.' ';        
    case 8:                   
        echo $a++.' ';   
    case 9:                   
        echo $a++.' ';   
    case 10:                  
        echo $a++.' ';    
    case 11:                  
        echo $a++.' ';    
    case 12:                  
        echo $a++.' ';    
    case 13:                  
        echo $a++.' ';    
    case 14:
        echo $a++.' ';
    case 15:
        echo $a++.' ';
}
echo PHP_EOL.PHP_EOL;
// Задание 2 <--  

// Задание 3 -->
function addition(int $addend1, int $addend2)
{
    return $addend1 + $addend2;
}

function subtraction(int $minuend, int $subtrahend)
{
    return $minuend - $subtrahend;
}

function multiplication(int $factor1, int $factor2)
{
    return $factor1 * $factor2;
}

function division(int $dividend, int $divisor)
{
    if ($divisor == 0) {
        echo "На ноль делить нельзя!";
        return NULL;
    }
    return $dividend / $divisor;
}
// Задание 3 <--  


// Задание 4 -->
function mathOperation($arg1, $arg2, $operation)
{
    $ret = 0;

    switch ($operation) {
        case 'addition':
        case 'add':
        case '+':
            $ret = addition($arg1, $arg2);
            break;
        
        case 'subtraction':
        case 'sub':
        case '-':
            $ret = subtraction($arg1, $arg2);
            break;            

        case 'multiplication':
        case 'mult':
        case '*':
            $ret = multiplication($arg1, $arg2);
            break;

        case 'division':
        case 'div':
        case '/':
            $ret = division($arg1, $arg2);
            break;

        default:
            echo "Функция '$operation' не реализована!".PHP_EOL;
            $ret = NULL;
    }

    return $ret;
}
// Задание 4 <--

// Задание 6 -->
function power(int $val, int $pow)
{
    $ret = 0;

    if ($pow < 0) {
        echo "Значение степени '$pow', а должно быть больше или равно 0!";
        $ret = Null;
    } elseif ($pow == 0) {
        $ret = 1;            
    }
    else {
        $ret *= power($ret, $pow - 1);
    }
    return $ret;
}
// Задание 6 <--

// Задание 7 -->
function grammarCaseAndNumber($firstDigit, $secondDigit) // Вынес определение падежа и числа в отдельную функцию, т.к. иначе пришлось бы копипастить свитч для часов и минут.
{
    $ret = "";
    
    switch ($firstDigit) {
        case '1': 
            $ret = "родительныйПадеж_множественноеЧисло";    
            break;        

        default:
            switch ($secondDigit) {
                case '1':
                    $ret = "именительныйПадеж_единственноеЧисло";
                    break;

                case '2':
                case '3':
                case '4':
                    $ret = "родительныйПадеж_единственноеЧисло";
                    break;
                
                default:
                    $ret = "родительныйПадеж_множественноеЧисло";        
                    break;
            }            
    }

    return $ret;
}

function currntTime() {
    $hours = date("H");
    $minutes = date("i");

    $hoursEnding = '';
    $minutesEnding = '';

    @$hoursFirstDigit = substr($hours, -2, 1);
    @$minutesFirstDigit = substr($minutes, -2, 1);

    @$hoursLastDigit = substr($hours, -1, 1);
    @$minutesLastDigit = substr($minutes, -1, 1);



    switch (grammarCaseAndNumber( $hoursFirstDigit, $hoursLastDigit)) {
        case 'именительныйПадеж_единственноеЧисло':
            $hoursEnding = '';
            break;
        
        case 'родительныйПадеж_единственноеЧисло':
            $hoursEnding = 'a';
            break;

        case 'родительныйПадеж_множественноеЧисло':
            $hoursEnding = 'ов';            
            break;            
    }
    
    switch (grammarCaseAndNumber( $minutesFirstDigit, $minutesLastDigit)) {
        case 'именительныйПадеж_единственноеЧисло':
            $minutesEnding = 'a';
            break;
        
        case 'родительныйПадеж_единственноеЧисло':
            $minutesEnding = 'ы';
            break;

        case 'родительныйПадеж_множественноеЧисло':
            $minutesEnding = '';            
            break;            
    }    
    $ret = ($hoursFirstDigit == "0" ? $hoursLastDigit : $hours )." час".$hoursEnding." ".($minutesFirstDigit == "0" ? $minutesLastDigit : $minutes )." минут".$minutesEnding;
    return $ret;
}

echo currntTime();
?>