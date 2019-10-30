<?php
    $calcResult = 0;

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

    function isGoodFirstOperand()
    {
        return (bool)$_GET['firstOperand'] && is_numeric($_GET['firstOperand']);
    } 

    function isGoodSecondOperand()
    {
        return (bool)$_GET['secondOperand'] && is_numeric($_GET['secondOperand']);
    } 
  
    
    $operation =$_GET['operation'];
    function getSelectedAttribute($operation4check)
    {
        global $operation;
        if ($operation[0] && $operation[0] == $operation4check)
        {
            echo "selected";                
        }
    }

    if (isGoodFirstOperand() && isGoodSecondOperand()) {
        $firstOperand =$_GET['firstOperand'];    
        $secondOperand =$_GET['secondOperand'];
        $calcResult = mathOperation($firstOperand, $secondOperand, $operation[0] );
    }
    else {
        $firstOperand = 0;        
        $secondOperand = 0;   
    }
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
<body>    
    <script>
        document.addEventListener('keypress', function(e) {
            switch (e.key) {
                case "+":
                    document.getElementById('oprationControl').value = "add";
                    break;

                case "-":
                    document.getElementById('oprationControl').value = "sub";
                    break;

                case "*":
                    document.getElementById('oprationControl').value = "mult";
                    break;                    

                case "/":
                    document.getElementById('oprationControl').value = "div";
                    break;                                        
                                    
            };
            			
		});
    </script>        

    <form method="get">
    <fieldset>
        <legend>Калькулятор</legend>
        <label>Первое число:
            <input type="text" name="firstOperand" placeholder= "<?=$firstOperand?>">
            <br> </label>
        <label>Операция:           
            <select name="operation[]" id = "oprationControl" placeholder = "*">
                    <option value="add" <?php getSelectedAttribute("add");?>>+</option>
                    <option value="sub" <?php getSelectedAttribute("sub");?>>-</option>
                    <option value="mult" <?php getSelectedAttribute("mult");?>>*</option>
                    <option value="div" <?php getSelectedAttribute("div");?>>/</option>
                </select>
                <br> </label>

        <label>Второе число:
            <input type="text" name="secondOperand" placeholder="<?=$secondOperand?>">
            <br> </label>
        <label>Результат: <?=$calcResult?>
            <br> </label>     
        <input type="submit" value="Посчитать">        
    </fieldset>
    </form>                    
</body>

</html>