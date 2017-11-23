<?php
declare(strict_types=1);

namespace SOLIDExamples\OpenClosePrinciple\Kinds;

use SOLIDExamples\OpenClosePrinciple\Beverage;

class StarCafeSpecial extends Beverage
{
    public function cost(): float
    {
        return parent::cost() + 4.5;
    }
}
