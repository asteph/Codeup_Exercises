<?php 
class Square extends Rectangle
{
	public function __construct($sideLength){
		$this->height = $sideLength;
		$this->width = $sideLength;
	}
	public function perimeter(){
		return $this->height * 4;
	}
}