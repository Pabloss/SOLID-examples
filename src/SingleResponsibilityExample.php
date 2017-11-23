<?php
declare(strict_types=1);

namespace SOLIDExamples;

/**
 * DataProvider class is "wrong" case of SRP
 * because:
 *
 * The names are important. Their are explaining e.g purpose of the code.
 *
 *      So when we Provide the Data we should only Provide it and not render
 *      (if, of course, we don't treat tags as data)
 *
 * When we changes e.g. source of data we should change DataProvider class.
 * And when we're changing html structure we should change DataProvider class too.
 *
 * Then in extreme case when whole application contains classes with maximum levels of responsibility,
 * all even smallest change would (in high chance) propagate all over the application. And that case
 * is hardest to maintain when we "afraid" to touch the code because that "chain reaction effect"
 *
 */
class DataProvider
{
    private $data = [];

    public function data(): array
    {
        return $this->data;
    }

    public function renderHtml(array $data): string
    {
        $result = "<ul>\n";
        foreach ($data as $key => $item) {
            $result .= "<li><a href='$key'>$item</a></li>\n";
        }
        $result .= "</ul>\n";
        return $result;
    }
}

/**
 * DataProvider and Renderer classes are "right" cases of SRP
 * because of obvious separation:
 * 1. DataProvider only gives data
 * 2. Renderer only takes data and wraps it by html tags
 *
 * There will be less possibility that one these two classes would be changed when requirements were changed too.
 * All required changes for html shape will focus only on Renderer class.
 *
 * PS. Also, we could pass DataProvider for Renderer::toHtml method, but (I'm not sure) we could failed other Principle
 * Inverse Dependency, because we could depend on concrete solution - means DataProvider in Renderer::toHtml method.
 */

class DataProvider
{
    private $data = [];

    public function data(): array
    {
        return $this->data;
    }
}

class Renderer
{
    public function toHtml(array $data)
    {
        $result = "<ul>\n";
        foreach ($data as $key => $item) {
            $result .= "<li><a href='$key'>$item</a></li>\n";
        }
        $result .= "</ul>\n";
        return $result;
    }
}
