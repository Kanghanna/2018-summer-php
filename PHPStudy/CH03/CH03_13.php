<?php

echo "10! ��� - For��<br><br>";

$fac = 1;
for($i = 1; $i <= 10; $i++){
    if($i == 10)
        echo "$i";
    else echo "$i&nbspx&nbsp";

    $fac *= $i;
}

echo "<hr/>10! = $fac";

?>