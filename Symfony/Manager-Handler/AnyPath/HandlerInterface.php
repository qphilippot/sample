<?php

declare(strict_types=1);

namespace App\AnyPath;

interface HandlerInterface
{
    public function supports(string $path): bool;
    public function process(string $path): string;
}
