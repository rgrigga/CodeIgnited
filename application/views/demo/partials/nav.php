<ul>
	<li><a href="/">Home</a></li>
	<li><a href="/demo">Demo Home</a></li>

<?php 

$path=APPPATH.'/views/demo/pages/';
$mypages = array();

foreach (glob($path."*.php") as $filename) {
    $filename=str_replace($path, "", $filename);
    $filename=str_replace(".php", "", $filename);
    array_push($mypages,$filename);
}

function li($item){
	$str="<li><a href='/demo/".$item."'>".$item."</a></li>";
	return $str;
}

// die(var_dump($mypages));

foreach ($mypages as $item) {
	echo li($item);
}

?>
<li><a href="/api/demo">API Demo</a></li>
</ul>
