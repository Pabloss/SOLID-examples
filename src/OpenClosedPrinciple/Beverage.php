<?php
declare(strict_types=1);

class Beverage
{
    private $description;
    private $milk;
    private $soyMilk;
    private $chocolate;

    public function description(string $description)
    {
        if(empty($description)){
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
}