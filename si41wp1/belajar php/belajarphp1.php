<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Script php dalam html</h1>
    <?php
        echo "You And I";
        $data1="data pertama";
        $data2="data kedua";
        $data3=100;
        $data4=20.5;

        echo $data1;
        echo "<br>";
        echo $data2." - ".$data3;
        $hasil = $data3 * $data4;
        echo "<br>";
        echo $hasil;

        if($data4>=30 && $data4<=50){
            echo "Range data 30-50";
        }else{
            
        }
        ?>
</body>
</html>