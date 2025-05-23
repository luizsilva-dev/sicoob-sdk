<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\CobrancaBancaria;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class ResultadoStatus
{
    public function __construct(
        public readonly int|string $codigo,
        public readonly ?string $mensagem = null,
    ) {
    }
}
