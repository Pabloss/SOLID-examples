<?php
declare(strict_types=1);

namespace SOLIDExamples\DependencyInversionPrinciple;

/**
 * This is a code from my other work.
 *
 * But this example doesn't meet DIP principle.
 * Traverser class depends on concrete Parser class and last one depends ond Crawler class.
 * It provides to rigidity of the part of application.
 */

class Traverser
{
    private $parser;

    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }
}

use Infrastructure\Parser\XML\Exception\ItIsNotXMLException;
use Symfony\Component\DomCrawler\Crawler;

class Parser implements ParserInterface
{
    private $crawler;

    public function __construct(Crawler $crawler)
    {
        $this->crawler = $crawler;
    }
}
