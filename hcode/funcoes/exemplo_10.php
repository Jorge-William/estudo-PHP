<?php
 
function test($callback){
// processo Lento
    $callback();

} 

test(function(){
    echo "Terminou!";
})



?>