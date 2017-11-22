<?php
declare(strict_types=1);

class RightExample
{
    private $data = [];

    public function data(): array
    {
        return $this->data;
    }
}

class Render{
    public function toHtml(array $data)
    {
        $result = "<ul>\n";
        foreach($data as $key => $item){
            $result .= "<li><a href='$key'>$item</a></li>\n";
        }
        $result .= "</ul>\n";
        return $result;
    }
}
