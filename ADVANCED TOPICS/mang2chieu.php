<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <?php
$superheroes = array (
array (" Peter Parker ", " peterparker@mail . com") ,
array (" Clark Kent ", " clarkkent@mail . com") ,
array (" Harry Potter ", " harrypotter@mail . com") ,
array (" Steve Rogers ", " steverogers@mail . com")
);
for ($i =0; $i < count ( $superheroes ) ;$i ++) {
echo "<ul >";
for ($j =0; $j < count ( $superheroes [$i ]) ;$j ++) {
echo "<li >". $superheroes [$i ][ $j ]." </li >";
}
echo " </ul >";
}
?> -->

<?php
$superheroes = array (
" spider - man " => array (
" name " => " Peter ␣ Parker ",
" email " => " peterparker@mail . com ") ,
"super - man" => array (
" name " => " Clark ␣ Kent ",
" email " => " clarkkent@mail .com ") ,
"iron - man " => array (
" name " => " Tony ␣ Stark ",
" email " => " tonystark@mail .com ")
);
foreach($superheroes as $key => $value){
    echo "key: ". $key ."<br>";
    foreach($value as $key1 => $value1)
        echo "$key1 : $value1 <br>" ;
}
?>

</body>
</html>