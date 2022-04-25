<?php

//An experimental code to calculate OS marks

$catsTotal = 150;

function catSUM(float $process, float $timeline, float $deadlocks, float $cat2, float $cat1, float $attend){
   
    
    $actualCAT = $process + $timeline +$deadlocks + $cat2 + $cat1 + $attend;

    return $actualCAT;
}

$catActual = catSUM(14, 6, 13, 41, 20, 8);
$realCAT = ($catActual/150);
$catProportion = $realCAT * 40;

$examTotal = 52.93;

//We are trying to find the actual exam mark....

// $examMark = $examTotal - $catProportion;

//But since we found the actual exam mark, let's see what the total could be...
$examTotalnew = 40.4 + $catProportion;
//Displaying data in browser..
// echo "<b>Exam mark: </b>" . $examMark;
echo "<b>CAT mark(Actual): </b><br>" . $catProportion;
echo "<b>OS total: </b><br>" . $examTotalnew;

?>