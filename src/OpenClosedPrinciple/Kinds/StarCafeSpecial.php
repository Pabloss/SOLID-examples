<?php
declare(strict_types=1);

namespace SOLIDExamples\OpenClosePrinciple\Kinds;

use SOLIDExamples\OpenClosePrinciple\Beverage;

class StarCafeSpecial extends Beverage //Solution that broke OCP
{
    public function cost(): float
    {
        return parent::cost() + 4.5;
    }
}

class StarCafeSpecial extends Beverage //Solution that matches OCP
{
    protected $description  = "Star Cafe Special";

    public function cost(): float
    {
        return 4.5;
    }
}
