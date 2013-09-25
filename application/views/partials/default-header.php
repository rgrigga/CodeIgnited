<header>
	<h1>Default Header</h1>
	<p>This is the default header area.</p>
	<p>Override this (and/or nav, secondary, and footer) by adding a line like this in your Controller:</p>
<?php
$str=htmlentities("\$this->data['header']='demo/partials/header';")
?>
	<pre><?= $str; ?></pre>

	<p>This project is built with <a href="https://github.com/xylude/CodeIgnited">CodeIgnited</a>, on top of <a href="http://ellislab.com/codeigniter">CodeIgniter</a></p>
</header>