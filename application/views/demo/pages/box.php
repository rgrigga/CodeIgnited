<?php


$itemarray=array();

$item1= new ItemBox("amp");
$item1->set_dimensions(4,8,10,10);

$item2= new ItemBox("speakers");
$item2->set_dimensions(3,6,6,4);

$item3= new ItemBox("speakers");
$item3->set_dimensions(3,6,6,4);

$item4= new ItemBox("wire");
$item4->set_dimensions(4,4,5,1);

array_push($itemarray, $item1);
array_push($itemarray, $item2);
array_push($itemarray, $item3);
array_push($itemarray, $item4);

// print_r($itemarray);

$json=json_encode($itemarray);
echo($json);


