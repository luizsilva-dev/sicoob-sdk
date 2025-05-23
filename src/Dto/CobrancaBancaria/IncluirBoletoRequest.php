<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\CobrancaBancaria;

use LuizSilvaDev\Sicoob\Model\CobrancaBancaria\Boleto;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class IncluirBoletoRequest
{
    public function __construct(
        public readonly Boleto $boleto,
    ) {
    }
}
