<?php
declare(strict_types=1);

namespace SOLIDExamples\OpenClosePrinciple\Kinds;

use SOLIDExamples\OpenClosePrinciple\Beverage;

class Espresso extends Beverage //Solution that broke OCP
{
    public function cost(): float
    {
        return parent::cost() + 3.4;
    }
}


class Espresso extends Beverage //Solution that matches OCP
{
    protected $description  = "Espresso";

    public function cost(): float
    {
        return 3.4;
    }
}
