<?php

declare(strict_types=1);

namespace App\AnyPath;

interface ManagerInterface
{
    public function process(string $path): string;

}
