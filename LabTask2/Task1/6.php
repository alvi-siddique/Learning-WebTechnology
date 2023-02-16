
<?php

$A = array('a', 'b', 'c', 'd', 'e');

$element = 'a';


for ($i = 0; $i < count($A); $i++)
{

    if ($A[$i] == $element)
    {
        
        echo 'Element found at position ' . $i;
    }
}

?>