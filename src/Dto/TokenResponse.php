<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class TokenResponse
{
    public function __construct(
        public readonly AuthenticationToken $token,
    ) {
    }
}
