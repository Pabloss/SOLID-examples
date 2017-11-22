<?php
declare(strict_types=1);


class WrongExample
{
    private $data = [];

    public function data(): array
    {
        return $this->data;
    }

    public function renderHtml(array $data): string
    {
        $result = "<ul>\n";
        foreach($data as $key => $item){
            $result .= "<li><a href='$key'>$item</a></li>\n";
        }
        $result .= "</ul>\n";
        return $result;
    }
}