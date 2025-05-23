<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\CobrancaBancaria;

use Symfony\Component\Serializer\Attribute\Ignore;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class BaixarBoletoRequest
{
    public function __construct(
        #[Ignore]
        public readonly int $nossoNumero,
        public readonly int $numeroCliente,
        public readonly int $codigoModalidade,
    ) {
    }
}
