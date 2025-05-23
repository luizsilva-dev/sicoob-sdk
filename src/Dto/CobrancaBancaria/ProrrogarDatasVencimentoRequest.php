<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\CobrancaBancaria;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class ProrrogarDatasVencimentoRequest
{
    /** @param array<int,ProrrogacaoDataVencimento> $prorrogacoes */
    public function __construct(
        public readonly array $prorrogacoes,
    ) {
    }
}
