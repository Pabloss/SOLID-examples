<?php
declare(strict_types=1);

namespace SOLIDExamplesTest\LiskovSubstitutionPrinciple;

use PHPUnit\Framework\TestCase;
use SOLIDExamples\LiskovSubstitutionPrinciple\Rectangle;
use SOLIDExamples\LiskovSubstitutionPrinciple\Square;


/**
 * Liskov Substitution Principle is the stronger than rule than only simple inheritance.
 * It requests to copy BEHAVIOR of base classes to inherited from them. Inheritance should be somehow "transparent" i.e.
 * in example below we could not be informed that collection is included by some "quire" objects as Squares. In other words:
 * we could not be forced to prepare specific conditions for more specific objects of the same base class.
 */
class RectangleTest extends TestCase
{
    /**
     * @test
     * @dataProvider additionProvider
     */
    public function draw($expected, Rectangle $rectangle)
    {
        /** Some kind of draw process */
        self::assertEquals($expected, $rectangle->getX() + $rectangle->getWidth());
    }

    public function additionProvider()
    {
        return [
                [12, Rectangle::getInstance(0, 1, 12, 17)],
                [9, Rectangle::getInstance(0, 1, 9, 12)],
                [2, Rectangle::getInstance(0, 1, 2, 8)],
                [12, Square::getInstance(0, 1, 12, 17)], // <= that test FAILS because we could don't now that width is replaced by height in square
                [12, Rectangle::getInstance(0, 1, 12, 17)],
                [15, Square::getInstance(0, 1, 15, 12)], // <= that test FAILS because we could don't now that width is replaced by height in squarea
                [12, Rectangle::getInstance(0, 1, 12, 17)],
        ];
    }
}
