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
        echo $i;

    }
    echo '<br>----------------------------------------------------------<br>';
  


?>