<?php
declare(strict_types=1);
namespace SOLIDExamples\OpenClosedPrinciple\Ingredients;

use SOLIDExamples\OpenClosePrinciple\Beverage;

class Milk
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
        return $this->beverage->description() . ", Milk";
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.20;
    }
}
