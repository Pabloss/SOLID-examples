<?php
declare(strict_types=1);

namespace SOLIDExamples\OpenClosePrinciple;

abstract class Beverage //Solution that broke OCP
{
    private $description;
    private $milk;
    private $soyMilk;
    private $chocolate;
    private $whippedCream;

    public function description(string $description)
    {
        if (empty($description)) {
            return $this->description;
        }

        $this->description = $description;
    }

    public function withMilk(): bool
    {
        return $this->milk;
    }

    public function addMilk(bool $milk): void
    {
        $this->milk = $milk;
    }

    public function withSoyMilk(): bool
    {
        return $this->soyMilk;
    }

    public function addSoyMilk(bool $soyMilk): void
    {
        $this->soyMilk = $soyMilk;
    }

    public function withChocolate(): bool
    {
        return $this->chocolate;
    }

    public function addChocolate(bool $chocolate): void
    {
        $this->chocolate = $chocolate;
    }

    public function withWhippedCream(): bool
    {
        return $this->whippedCream;
    }

    public function addWhippedCream(bool $whippedCream): bool
    {
        $this->whippedCream = $whippedCream;
    }

    /**
     * This example comes from "Head First! Design Patterns"
     * - the book contains Java code but example below is a try of translating it into PHP
     *
     * This is the center of breaking of this OCP principle
     * These are main reasons/features that forces not to extend existed code but change the code to match new requirements
     *
     * 1. Every change of addition cost will force the method below body change.
     * 2. Providing next new additions also will force the change of the method.
     * 3. Some kind of beverage are not suitable to all additions.
     *
     * That's why the "the module has been given a well-defined, stable description" explaining was broken by solution below -
     * means it is not CLOSED.
     */
    public function cost(): float
    {
        $cost = 0.0;
        if ($this->withMilk()) {
            $cost += 1.2;
        }

        if ($this->withChocolate()) {
            $cost += 2.1;
        }

        if ($this->withSoyMilk()) {
            $cost += 3.1;
        }

        return $cost;
    }
}


abstract class Beverage //Solution that matches OCP
{
    protected $description = "undefined";

    public function description(): string
    {
        return $this->description;
    }

    abstract public function cost();
}

/**
 * Why it is a good solution (BTW it uses Decorator Pattern)?
 *
 * Because:
 * When I need to add a new Ingredient I don't need to CHANGE EXISTED CODE
 * only need to ADD a new code with convention of previous already existed decorators (in this example, of course).
 *
 * e.g.
 *
 * Espresso + 2 x Chocolate + Milk
 * $coffee = new Espresso();
 * $chocolate1 = new Chocolate($coffee);
 * $chocolate2 = new Chocolate($chocolate1);
 * $milk = new Milk($chocolate2);
 *
 */
