<?php

declare(strict_types=1);

namespace App\AnyPath;

use App\AnyPath\UnknownHandlerException;
use App\AnyPath\HandlerInterface;
use App\AnyPath\ManagerInterface;

    final class Manager implements ManagerInterface
{
    /**
     * @var HandlerInterface[]
     */
    private iterable $handlers;

    public function __construct(
        iterable $handlers
    ) {
        $this->handlers = $handlers;
    }

    public function process(string $path): string
    {
        return $this->findHandler($path)->process($path);
    }

    private function findHandler(string $path): HandlerInterface
    {
        foreach ($this->handlers as $handler) {
            if ($handler->supports($path)) {
                return $handler;
            }
        }

        throw new UnknownHandlerException($path);
    }
}
