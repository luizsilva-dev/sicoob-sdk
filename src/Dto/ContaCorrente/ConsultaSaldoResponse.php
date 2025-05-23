<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\ContaCorrente;

use LuizSilvaDev\Sicoob\Model\ContaCorrente\Saldo;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class ConsultaSaldoResponse
{
    /** @param array<int,string> $mensagens */
    public function __construct(
        public readonly array $mensagens,
        public readonly Saldo $resultado,
    ) {
    }
}
