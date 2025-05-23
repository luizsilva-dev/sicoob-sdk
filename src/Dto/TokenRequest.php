<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto;

use LuizSilvaDev\Sicoob\Types\TokenScope;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class TokenRequest
{
    /** @param array<int,TokenScope> $scopes */
    public function __construct(
        public readonly string $clientId,
        public readonly array $scopes,
    ) {
    }
}
