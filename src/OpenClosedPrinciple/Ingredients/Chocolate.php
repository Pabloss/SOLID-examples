<?php
declare(strict_types=1);


use SOLIDExamples\OpenClosePrinciple\Beverage;

class Chocolate extends IngredientDecorator
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
        return $this->beverage->description() . ", Chocolate";
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.20;
    }
}
