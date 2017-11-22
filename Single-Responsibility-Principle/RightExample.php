<?php
declare(strict_types=1);

/**
 * RightExample and Render classes are "right" cases of SRP
 * because of obvious separation:
 * 1. RightExample only gives data
 * 2. Render only takes data and wraps it by html tags
 *
 * There will be less possibility that one these two classes would be changed when requirements were changed too.
 * All required changes for html shape will focus only on Render class.
 */

class RightExample
{
    private $data = [];

    public function data(): array
    {
        return $this->data;
    }
}

class Render
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
