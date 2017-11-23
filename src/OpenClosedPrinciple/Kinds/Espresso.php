<?php
declare(strict_types=1);

namespace SOLIDExamples\OpenClosePrinciple\Kinds;

use SOLIDExamples\OpenClosePrinciple\Beverage;

class Espresso extends Beverage
{
    public function cost(): float
    {
        return parent::cost() + 3.4;
    }
}
