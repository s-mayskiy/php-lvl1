<?php    
    // Задание 1 -->
    $i = 0;   
    while ($i <= 100)
    {
        if ($i % 3 == 0)
        {
            echo $i." ";        
        }
        $i++;
    }
    echo PHP_EOL.PHP_EOL;
    //Задание 1 <--
    
    //Задание 2 -->
    function zeroToTen ()
    {
        $zeroToTenCounter = 0;
        do {
            if ($zeroToTenCounter == 0)
            {
                echo "0 - ноль.";
            } elseif ($zeroToTenCounter % 2){
                echo $zeroToTenCounter." - нечётное число.";
            } else {
                echo $zeroToTenCounter." - чётное число.";
            }
            echo PHP_EOL;    
            $zeroToTenCounter++;
        }while ($zeroToTenCounter <= 10);
        echo PHP_EOL;
    }
    zeroToTen();
    //Задание 2 <--
    
    //Задание 3 -->
    $landArray =
    [
        "Московская" => ['Москва', 'Зеленоград', 'Клин'],
        "Ленинградская" => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
        "Рязанская" => ['Касимов', 'Кораблино', 'Михайлов', 'Новомичуринск']
        ];
        
    foreach ($landArray as $oblName => $cityArray) {
        echo $oblName." область:".PHP_EOL;
        $firstCity = true;
        foreach ($cityArray as $city) {
            echo $firstCity ? $city : ", ".$city;    
            $firstCity = false;
        }
        echo PHP_EOL;
        }
    echo PHP_EOL;
    //Задание 3 <--
    
    //Задание 4 -->
    function myTranslit(string $string4translit) {
        $translitArray = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'zh',
            'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
            'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
            'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ь' => '\'', 'ы' => 'y', 'ъ' => '\'', 'э' => 'e',
            'ю' => 'yu', 'я' => 'ya',
            'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh',
            'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
            'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
            'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch', 'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'', 'Э' => 'E',
            'Ю' => 'Yu', 'Я' => 'Ya'
            ];
            
        return strtr($string4translit, $translitArray);
    }
    echo myTranslit('Мама мыла раму. Шла Саша по шоссе и сосала сушку.');
    echo PHP_EOL.PHP_EOL;    
    //Задание 4 <-- 
    
    //Задание 5 -->
    function mySpaceReplace($string4replace)
    {
        return str_replace(" ", "_", $string4replace);
    }
    echo mySpaceReplace('Мама мыла раму. Шла Саша по шоссе и сосала сушку.');
    echo PHP_EOL.PHP_EOL;
    //Задание 5 <--
    
    //Задание 7 -->
    for($j = 0; $j < 10; print($j++." ")){}
    echo PHP_EOL.PHP_EOL;
    //Задание 7 <--
    
    
    //Задание 8 -->
    foreach ($landArray as $oblName => $cityArray) {
        echo $oblName." область:".PHP_EOL;
        $firstCity = true;
        foreach ($cityArray as $city) {
            if (!preg_match('/^К/', $city)) {
                continue;
            }
            echo $firstCity ? $city : ", ".$city;    
            $firstCity = false;
        }
        echo PHP_EOL;
    }
    echo PHP_EOL;
    //Задание 8 <--
    
    
    //Задание 9 -->
    function transliterateAndReplace($inputString) {
        return mySpaceReplace(myTranslit($inputString));
    }
    echo transliterateAndReplace('Мама мыла раму. Шла Саша по шоссе и сосала сушку.');
    //Задание 9 <--
?>