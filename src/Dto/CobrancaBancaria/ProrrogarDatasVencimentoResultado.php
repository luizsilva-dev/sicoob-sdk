<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\CobrancaBancaria;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class ProrrogarDatasVencimentoResultado
{
    public function __construct(
        public readonly ResultadoStatus $status,
        public readonly ?ProrrogacaoDataVencimento $prorrogacao,
    ) {
    }
}
