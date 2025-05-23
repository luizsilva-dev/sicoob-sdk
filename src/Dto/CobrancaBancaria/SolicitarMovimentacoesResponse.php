<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\CobrancaBancaria;

use LuizSilvaDev\Sicoob\Model\CobrancaBancaria\SolicitacaoMovimentacao;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class SolicitarMovimentacoesResponse
{
    public function __construct(
        public readonly SolicitacaoMovimentacao $resultado,
    ) {
    }
}
