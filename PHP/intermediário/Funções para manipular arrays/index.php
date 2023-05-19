<?php
//*************array_merge**********************
    $arr = array("cor" => "vermelho",2,4);
    $arr1 = array("a","b","cor" => "verde", "forma" => "trapezoide", 4);
    $resultado = array_merge($arr,$arr1);
    print_r($resultado);
    echo "<br>";
    //*************array_intersect_key**********************
    $arr2 = array("nome" => "matheus", "idade" => 20);
    $arr3 = array("nome" => "gabriel", "idade" => 20);
    $resultadointer = array_intersect_key($arr2,$arr3);
    print_r($resultadointer);
    //*************array_map**********************
    $arr4 = ['<sub>gabriel<sub/>','<sub>david<sub>','rallenson'];
    print_r(array_map("strip_tags",$arr4));

?>

