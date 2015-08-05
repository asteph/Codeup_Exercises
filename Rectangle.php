<?php 
class Rectangle
{
	public function __construct($height, $width = null){
		$this->height = $height;
		if(isset($width)){
			$this->width = $width;
		}else{
			$this->width = $height;
		}
	}
	public function area(){
		return $this->height * $this->width;
	}
}
