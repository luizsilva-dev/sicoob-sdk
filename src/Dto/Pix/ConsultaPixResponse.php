<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Dto\Pix;

use LuizSilvaDev\Sicoob\Model\Pix\Pix;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class ConsultaPixResponse
{
    /** @param array<int,Pix> $pix */
    public function __construct(
        public readonly array $pix,
    ) {
    }
}
