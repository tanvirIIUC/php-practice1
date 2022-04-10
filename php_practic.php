<?php

    $name='tanvir hasan sohan';
    $age=21;
    echo $name.'<br>';
    echo $age.'<br>';
    echo var_dump($age);
    echo '<br> -------------------------------------------------------<br>';
    $a=19;
    $b=3;
    $c=26;

    if($a>$b&&$a>$c)
    {
        echo 'A is large';
    }
    else if($b>$a&&$b>$c)
    {
        echo 'B is large';
    }
    else {
        echo 'C is large';
    }

    echo '<br>----------------------------------------------------------<br>';
    
    for($i=1; $i<=20; $i++)
    {
        if($i%2==0){
            echo $i.' ';
        }
       

    }
    echo '<br>---------------Using array--------------------------<br>';
    $ar=array(2,9,1,5,9);
    print_r($ar);


    echo '<br> ********** using foreach ************ <br>';

    $num=array(4,2,7,10);
    foreach($num as $value)
    {
        echo $value,' ';
    }
    echo '<br> ********** push array and sort************ <br>';

    $data=array(10,12,11,15,16);
array_push($data, 100);
sort($data);
for($i=0;$i<5;$i++)
{
    array_push($data, $i);
}

foreach ($data as $value)
{
    echo $value.'<br>';
    
}

echo '<br> ********** using associative array************ <br>';

$name_age=array('sohan'=>21,'mishon'=>22,'shihab'=>20,'rakib'=>19);
foreach($name_age as $key => $value)
{
    echo $key.' is : '.$value.'<br>';
}


?>