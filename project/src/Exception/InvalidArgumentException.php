<?php

declare(strict_types=1);

namespace App\Exception;

class InvalidArgumentException extends \InvalidArgumentException
{
    public static function createFromMessage(string $message): self
    {
        return new self($message);
    }
}
