<?php

$a = 111;
$b = 121;
$c = "string";
$d = 12;
// creates a ZVAL containg the value 12 and type int
// php then create an entry in the symbol table mapping the variable name to the ZVAL
// increments the ZVAL reference count to 1

/* incase no reference
$e = $d;
// php adds another entry in the symbol table mapping the variable name to the same ZVAL as var d
// php increments the ZVAL reference count to 2
// as of now $d and $e point to the same ZVAL. In case of a write to $d or $e PHP will create another ZVAL(copy) with the new value. 
*/

$e = &$d;
// php adds another entry in the symbol table mapping the variable name to the same ZVAL as var d
// php increments the ZVAL reference count to 2, but also increase the ZVAL is_ref to 1
// is_ref >1 means on write don't copy the value into an new ZVAL, but modify that value directly.

echo "Initial values:\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
echo $d;
echo "\n";
echo $e;
echo "\n";

function testReferences(&$a,$b,&$c,&$d){
        $a += 200;
        $b += 300;
        $c = $c . $c[0];
        $d += 12;
        return $a + $b;
}

echo "\nTotal function:\n";
echo testReferences($a,$b,$c,$d);

echo "\n\nAfter function:\n";
echo "\nAlso modified outside of function\n";
echo $a;
echo "\nOnly modified within function\n";
echo $b;
echo "\nAlso modified outside of function\n";
echo $c;
echo "\nAlso modified outside of function\n";
echo $d;
echo "\n var e references the same ZVAL as var d in the symbol table, ZVAL has a reference count of 2 and is_ref of 1 -  therefore also change outside of function\n";
echo $e;
echo "\n";
?>
