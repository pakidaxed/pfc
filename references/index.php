<?php
// 1 UZDUOTIS
function generate_matric($size) {
    for($i = 0; $i < $size; $i++) {
        $array[] = rand(0,1);
    }
    return $array;
}

var_dump(generate_matric(3));