<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Model\Pix;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class JurosMulta
{
    public function __construct(
        public readonly int|string $modalidade,
        public readonly string $valorPerc,
    ) {
    }
}
