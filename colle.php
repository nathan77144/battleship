<?php
function colle($x, $y)
{
    $value = "| ";
    for ($i = 3; $i < $x; $i++) {
        $value .= "  | ";
    }
    $value .= "\n";
    if ($x > 0) {
        for ($i = 0; $i < $y; $i++) {
            echo "+---+---+---+\n";
            echo $value;
            
        }
        echo "+---+---+---+\n";
        
    }
}


colle(6, 4);
