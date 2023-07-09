<?php

declare(strict_types=1);

namespace App\AnyPath\Handler;

use App\AnyPath\HandlerInterface;

final class BarHandler implements HandlerInterface
{

    public function supports(string $path): bool
    {
        return str_starts_with($path, 'bar://');
    }

    public function process(string $path): string
    {
        return 'processed with bar';
    }
}
