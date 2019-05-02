<?php

echo "Random numero from feature1: " . $num = rand(-100, 100);
echo "<br>";
echo "Numero rand: " . $abs = abs($num);
echo "<br>";
echo "Numero pow: " . $pow = pow($num, 2);
echo "<br>";
echo "Numero sqrt: " . $sqrt = sqrt($abs);
echo "<br>";
echo "Numero mod: " . $mod = $num % 2;

if(is_int($sqrt)) echo "<p>Luvun ". $abs . " sqrt on kokonaisluku</p>";
if(is_float($sqrt)) echo "<p>Luvun ". $abs . " sqrt on desimaaluku " . round($sqrt) . "</p>";
if (!is_int($sqrt) && !is_float($sqrt)) echo "<p>Luvun ". $abs . " ei ole numeerinen datatyyppi</p>";


$num2 = rand(190, 200) * 10;
echo "Num2 luku on " . $num2 . " <br />";
if($num2 == 1986) {
    echo "Luku ".$num2." on syntymävuoteni 1985";
} else {
    if($num2 < 1986) {
        $lis = 1986 - $num2;
        echo "Luku ". $num2 ." on pienempi kuin syntymävuoteni: 1986. Lisää lukua " . $lis . " vuodella";
    } else {
        $kor = 1986 - $num2;
        echo "Luku " . $num2 ." on suurempi kuin syntymävuoteni: 1986. Vähennetään lukua " . abs($kor) . " vuodella";
    }
}