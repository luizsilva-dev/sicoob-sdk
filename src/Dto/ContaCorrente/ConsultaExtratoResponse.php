<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\ContaCorrente;

use LuizSilvaDev\Sicoob\Model\ContaCorrente\Extrato;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class ConsultaExtratoResponse
{
    /** @param array<int,string> $mensagens */
    public function __construct(
        public readonly array $mensagens,
        public readonly Extrato $resultado,
    ) {
    }
}
