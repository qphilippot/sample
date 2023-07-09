<?php

declare(strict_types=1);

namespace App\AnyPath\Handler;

use App\AnyPath\HandlerInterface;

final class FooHandler implements HandlerInterface
{

    public function supports(string $path): bool
    {
        return str_starts_with($path, 'foo://');
    }

    public function process(string $path): string
    {
        return 'processed with foo';
    }
}
