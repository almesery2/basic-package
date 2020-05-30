<?php

namespace Spatie\UnitConversions;

class Weight
{
    /* @var float */
    private $kilograms;

    public static function fromKilogram(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs(): float
    {
        return $this->kilograms * 2.204523;
    }
}
