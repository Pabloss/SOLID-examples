<?php
declare(strict_types=1);


use SOLIDExamples\OpenClosePrinciple\Beverage;

class SoyMilk
{
    private $beverage;

    /**
     * Chocolate constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }


    public function description()
    {
        return $this->beverage->description() . ", Soy Milk";
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.30;
    }
}
