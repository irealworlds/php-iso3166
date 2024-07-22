<?php

declare(strict_types=1);

namespace League\ISO3166;

final readonly class Country
{
    /**
     * @param string $name
     * @param string $alpha2
     * @param string $alpha3
     * @param numeric-string $numeric
     * @param iterable<string> $currency
     */
    function __construct(
        public string $name,
        public string $alpha2,
        public string $alpha3,
        public string $numeric,
        public iterable $currency = []
    ) {
    }
}