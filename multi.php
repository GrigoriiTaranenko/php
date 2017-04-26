<?php
function multi ($b){
    return $b*$b;
};
$mult=function($b){
    return $b*$b;
};

echo <<<has
<h2> умножения {$mult(2)}</h2> 
<h2>error</h2>
has;
?>