<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\CobrancaBancaria;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class ProrrogarDatasVencimentoResponse
{
    /** @param array<int,ProrrogarDatasVencimentoResultado> $resultado */
    public function __construct(
        public readonly array $resultado,
    ) {
    }
}
