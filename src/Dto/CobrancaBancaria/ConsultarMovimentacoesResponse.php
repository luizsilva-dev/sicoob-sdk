<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\CobrancaBancaria;

use LuizSilvaDev\Sicoob\Model\CobrancaBancaria\ResumoMovimentacoes;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class ConsultarMovimentacoesResponse
{
    public function __construct(
        public readonly ResumoMovimentacoes $resultado,
    ) {
    }
}
