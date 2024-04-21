<?php

declare(strict_types=1);

namespace App\Content\Services;

enum ContentItemType: string
{
    case Text = 'Text';
    case Markdown = 'Markdown';
    case Html = 'Html';
    case NuxtContent = 'NuxtContent';
    case Image = 'Image';
}
