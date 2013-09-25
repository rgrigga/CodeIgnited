<?php

class Boxcalc{

private $shipping_container;
private $items;

function __construct(){
	
}

}


class Genericbox{
	private $height;
	private $width;
	private $length;
	private $weight;
	private $name;

	function __construct($name){
		$this->set_name($name);
		// $this->set_dimensions($h,$w,$l,$t,$n);
	}

	function set_dimensions($h,$w,$l,$t){
		$this->height=$h;
		$this->width=$w;
		$this->length=$l;
		$this->weight=$t;
	}

	function get_dimensions(){
		$dimensions = array();
		foreach ($this as $key => $value) {
			$dimensions[$key]=$value;
			return $dimensions;
		}
	}

	function get_dimension($dimension){
		return $this->$$dimension; 
	}

	function set_name($name){
		$this->name=$name;
	}
}

class ItemBox extends GenericBox{
	private $contents = "unknown";
	function __construct($name,$contents="unknown"){
		parent::__construct($name);
		$this->contents=$contents;
	}
}
Class ShippingBox extends GenericBox{
	function __construct($name){
		parent::__construct($name);
	}
}

Class BoxCollection{
	
	private $boxes = array();

	function __construct(){
		parent::__construct();
	}
	
}