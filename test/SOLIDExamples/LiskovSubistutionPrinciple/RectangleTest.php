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
     * It would be an example of conditions that DOES NOT meet LSP principle
     *
     * @test
     * @dataProvider additionProvider
     */
    public function draw($expected, Rectangle $rectangle)
    {
        /** Some kind of draw process */
        self::assertEquals($expected, $rectangle->getX() + $rectangle->getWidth()); // <= some data from additionProvider could FAIL the test
    }

    /**
     * It would be an example of conditions that meet LSP principle
     *
     * @test
     * @dataProvider areaProvider
     */
    public function area($expected, Rectangle $rectangle)
    {
        /** Some kind of draw process */
        self::assertEquals($expected, $rectangle->getWidth() * $rectangle->getHeight()); // <= all data from  areaProvider will PASS the test
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

    public function areaProvider()
    {
        return [
            [12*17, Rectangle::getInstance(0, 1, 12, 17)],
            [9*12, Rectangle::getInstance(0, 1, 9, 12)],
            [2*8, Rectangle::getInstance(0, 1, 2, 8)],
            [17*17, Square::getInstance(0, 1, 12, 17)], // <= that test FAILS because we could don't now that width is replaced by height in square
            [12*17, Rectangle::getInstance(0, 1, 12, 17)],
            [12*12, Square::getInstance(0, 1, 15, 12)], // <= that test FAILS because we could don't now that width is replaced by height in squarea
            [12*17, Rectangle::getInstance(0, 1, 12, 17)],
        ];
    }
}
