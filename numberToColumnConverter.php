<?php

function numsToColumnConverter($num): string { 
    $alphabetArr = range('A','Z');
    $colStr = '';
    
    while($num > 0)
    {
        $num--;
        $num_char = $num % 26;
        $colStr .= $alphabetArr[$num_char];
        $num = floor($num/26);
    }
    
    return strrev($colStr);
}

echo numsToColumnConverter(26).PHP_EOL;
echo numsToColumnConverter(51).PHP_EOL;
echo numsToColumnConverter(52).PHP_EOL;
echo numsToColumnConverter(80).PHP_EOL;
echo numsToColumnConverter(676).PHP_EOL;
echo numsToColumnConverter(702).PHP_EOL;
echo numsToColumnConverter(705).PHP_EOL;