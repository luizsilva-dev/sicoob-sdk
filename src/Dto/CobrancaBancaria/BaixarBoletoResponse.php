<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\CobrancaBancaria;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class BaixarBoletoResponse
{
    /** @param BaixarBoletoMensagem[] $mensagens */
    public function __construct(
        public readonly array $mensagens = [],
    ) {
    }
}
