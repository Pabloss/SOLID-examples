<?php
declare(strict_types=1);

/**
 * WrongExample class is "wrong" case of SRP
 * because:
 *
 * When we changes e.g. source of data we should change WrongExample class.
 * And when we're changing html structure we should change WrongExample class too.
 *
 * Then in extreme case when whole application contains classes with maximum levels of responsibility,
 * all even smallest change would (in high chance) propagate all over the application. And that case
 * is hardest to maintain when we "afraid" to touch the code because that "chain reaction effect"
 *
 */
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
        foreach ($data as $key => $item) {
            $result .= "<li><a href='$key'>$item</a></li>\n";
        }
        $result .= "</ul>\n";
        return $result;
    }
}
