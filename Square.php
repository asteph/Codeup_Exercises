<?php 
class Square extends Rectangle
{
	public function __construct($sideLength){
		parent::__construct($sideLength, $sideLength);
	}
	public function perimeter(){
		return $this->height * 4;
	}
}