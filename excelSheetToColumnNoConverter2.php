<?php

/**
 * @param string
 * Excel sheet column letter to column number converter
 * @return int  
 */
function letterToNumberConverter($columnTitle) : int {
    $num = 0;
    $alphaToNumMap = array_combine(range("A","Z"),range(1,26));
    $columnTitleLen = strlen($columnTitle) - 1;
    for($i=0;$i<strlen($columnTitle);$i++) {
        $num = $alphaToNumMap[$columnTitle[$i]] * pow(26,$columnTitleLen--) + $num;
    }
    
    return $num; 
}

echo letterToNumberConverter("A").PHP_EOL;
echo letterToNumberConverter("B").PHP_EOL;
echo letterToNumberConverter("C").PHP_EOL;
echo letterToNumberConverter("AA").PHP_EOL;
echo letterToNumberConverter("AB").PHP_EOL;