<?php

declare(strict_types=1);

namespace App\Category\Services\Data;

use Spatie\LaravelData\Data;

final class CategoryData extends Data
{
    public function __construct(
        public int $id,
        public string $title
    ) {
    }
}
