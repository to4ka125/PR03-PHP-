<!DOCTYPE html>
<html>

<head>
    <title>Результаты выбора характеристик двигателя</title>
</head>

<body>
    <h1>Результаты выбора характеристик двигателя</h1>
    <table border="1">
        <tr>
            <th>Модель двигателя</th>
            <th>Характеристика</th>
            <th>Значение</th>
        </tr>
        <?php
        $engine_model = $_POST['engine_model'];
        $characteristic = $_POST['characteristic'];
        $path1 = 'BASE01/ENGINE02.TXT';
        
        function getCharacteristic($content, $position, $length)
        {
            return trim(substr($content, $position, $length));
        }

        $handle=fopen($path1,'r');
    
        while(($content=fgets($handle))!=false){
        if (file_exists($path1)) { 
            $key1 = "степень сжатия";
            $key2 = "вес"; 

            if(strlen($engine_model)== 4){
                $model=getCharacteristic($content,56,4);
                if($model===$engine_model){
                    if($characteristic===$key1){
                        echo "<tr><td>$engine_model</td><td>$key1</td><td>" . getCharacteristic($content, 197, 16) . "</td></tr>";
                        break;
                    }

                if($characteristic===$key2){
                    echo "<tr><td>$engine_model</td><td>$key2</td><td>" . getCharacteristic($content, 229, 16) . "</td></tr>";
                    break;
                }

                if ($characteristic === 'all') {
                    echo "<tr><td>$engine_model</td><td>объем цилиндра</td><td>" . getCharacteristic($content, 149, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>количество цилиндров</td><td>" . getCharacteristic($content, 165, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>мощность (лс)</td><td>" . getCharacteristic($content, 181, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>$key1</td><td>" . getCharacteristic($content, 197, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>мощность (вт)</td><td>" . getCharacteristic($content, 213, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>$key2</td><td>" . getCharacteristic($content, 229, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>цена</td><td>" . getCharacteristic($content, 245, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>количество деталей</td><td>" . getCharacteristic($content, 261, 8) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>надежность</td><td>" . getCharacteristic($content, 269, 10) . "</td></tr>";
                    break;
                }
            }
            }

            else{
                $model=getCharacteristic($content,56,3);

                if($model===$engine_model){
                    if($characteristic===$key1){
                        echo "<tr><td>$engine_model</td><td>$key1</td><td>" . getCharacteristic($content, 197, 16) . "</td></tr>";
                        break;
                    }
                  
            

                if($characteristic===$key2){
                    echo "<tr><td>$engine_model</td><td>$key2</td><td>" . getCharacteristic($content, 229, 16) . "</td></tr>";
                    break;
                }

                if ($characteristic === 'all') {
                    echo "<tr><td>$engine_model</td><td>объем цилиндра</td><td>" . getCharacteristic($content, 149, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>количество цилиндров</td><td>" . getCharacteristic($content, 165, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>мощность (лс)</td><td>" . getCharacteristic($content, 181, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>$key1</td><td>" . getCharacteristic($content, 197, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>мощность (вт)</td><td>" . getCharacteristic($content, 213, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>$key2</td><td>" . getCharacteristic($content, 229, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>цена</td><td>" . getCharacteristic($content, 245, 16) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>количество деталей</td><td>" . getCharacteristic($content, 261, 8) . "</td></tr>";
                    echo "<tr><td>$engine_model</td><td>надежность</td><td>" . getCharacteristic($content, 269, 11) . "</td></tr>";
    
                }
            }
            }
       
        }

            else {
                echo "File not exits";
                exit(1);
            }
    
        }   
      
        ?>
    </table>
</body>

</html>