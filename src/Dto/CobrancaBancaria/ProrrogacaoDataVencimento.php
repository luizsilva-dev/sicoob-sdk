<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\CobrancaBancaria;

use DateTimeInterface;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class ProrrogacaoDataVencimento
{
    public function __construct(
        public readonly int $numeroCliente,
        public readonly int $codigoModalidade,
        public readonly string $nossoNumero,
        public readonly DateTimeInterface $dataVencimento,
    ) {
    }
}
