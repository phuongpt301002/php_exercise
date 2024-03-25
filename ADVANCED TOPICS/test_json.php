<?php
    $a = array();
    $a = ['a' => 'jeff', 'b' => '1', '20'];
    echo json_encode($a);
    echo json_encode($a, JSON_PRETTY_PRINT);
    // $newarray = json_decode($json_test,true);
    // var_dump($newarray);
?>