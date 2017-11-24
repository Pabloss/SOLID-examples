<?php
declare(strict_types=1);


use SOLIDExamples\OpenClosePrinciple\Beverage;

abstract class IngredientDecorator extends Beverage
{
    abstract public function description();
}
