<?php
declare(strict_types=1);
namespace SOLIDExamples\LiskovSubstitutionPrinciple;

class Rectangle
{
    protected $x;
    protected $y;

    private $width;
    private $height;

    private function __construct($x, $y, $width, $height)
    {
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
        $this->height = $height;
    }

    public static function getInstance($x, $y, $width, $height)
    {
        return new self($x, $y, $width, $height);
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }
}
