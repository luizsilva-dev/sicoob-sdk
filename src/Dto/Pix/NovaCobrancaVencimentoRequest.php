<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\Pix;

use LuizSilvaDev\Sicoob\Model\Pix\CalendarioVencimento;
use LuizSilvaDev\Sicoob\Model\Pix\InfoAdicional;
use LuizSilvaDev\Sicoob\Model\Pix\Pessoa;
use LuizSilvaDev\Sicoob\Model\Pix\ValorCobranca;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class NovaCobrancaVencimentoRequest
{
    /** @param array<int,InfoAdicional> $infoAdicionais */
    public function __construct(
        public readonly CalendarioVencimento $calendario,
        public readonly Pessoa $devedor,
        public readonly ValorCobranca $valor,
        public readonly string $chave,
        public readonly string $solicitacaoPagador,
        public readonly ?array $infoAdicionais = [],
    ) {
    }
}
