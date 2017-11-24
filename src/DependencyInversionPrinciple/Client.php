<?php
declare(strict_types=1);

namespace SOLIDExamples\DependencyInversionPrinciple;

use GuzzleHttp\Client as BaseClient;
use GuzzleHttp\Exception\ClientException;
use Infrastructure\Client\Exception\WrongRequestException;
use Infrastructure\Client\Request\RequestInterface;
use Infrastructure\Client\Response\ResponseFactory;
use Infrastructure\Client\Session\SessionInterface;
use Infrastructure\Parser\XML\Parser;
use Symfony\Component\DomCrawler\Crawler;

/**
 * This is a code from my other work.
 * I think that it is good example where DIP principle is met.
 *
 * My the definition understanding would be explained this way:
 * "inversion of dependency goes through forcing lower level modules interface by higher level modules interface and
 * theirs requirements"
 * The second part of fist point of the principle definition says that "both higher and lower levels
 * should depend on abstraction" but only higher level says what "a shape" of lower level interface
 * is required from lower level modules.
 */
class Client extends BaseClient implements ClientInterface
{
    /** @var  RequestInterface $request */
    private $request;

    /** @var  RequestInterface $response */
    private $response;

    public function __construct(string $baseUri)
    {
        parent::__construct(['base_uri' => $baseUri]);
    }

    public function setRequest(RequestInterface $request)
    {
        $this->request = $request;
        return $this;
    }

    public function doRequest()
    {
        /** ... some body ... */
    }
}
