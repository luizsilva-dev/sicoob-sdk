<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\ContaCorrente;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class ConsultaSaldoRequest
{
    public function __construct(
        public readonly int $numeroContaCorrente,
    ) {
    }
}
