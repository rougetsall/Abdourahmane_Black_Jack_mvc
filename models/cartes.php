<?php


$cartes=array("as"=>11,
2=>2,
3=>3,
4=>4,
5=>5,
6=>6,
7=>7,
8=>8,
9=>9,
10=>10,
"valet"=>10,
"dame"=>10,
"roi"=>10);

function test_as($total){
   if($total+11>21)
     return $total+=1;
   else
     return $total+=11;
}

?>
 