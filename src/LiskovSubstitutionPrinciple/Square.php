<?php
declare(strict_types=1);
namespace SOLIDExamples\LiskovSubistutionPrinciple;

class Square extends Rectangle
{
    private $size;

    private function __construct($x, $y, $size)
    {
        $this->x = $x;
        $this->y = $y;
        $this->size = $size;
    }

    public static function getInstance($x, $y, $width, $height){
        return new self($x, $y, $width);
    }

    public function getWidth()
    {
        return $this->size;
    }

    public function getHeight()
    {
        return $this->size;
    }

    public function getArea(){
        return $this->size * $this->size;
    }
}