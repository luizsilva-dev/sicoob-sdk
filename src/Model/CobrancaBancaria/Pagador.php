<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob\Model\CobrancaBancaria;

/**
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class Pagador
{
    public function __construct(
        public readonly string $numeroCpfCnpj,
        public readonly string $nome,
        public readonly string $endereco,
        public readonly string $bairro,
        public readonly string $cidade,
        public readonly string $cep,
        public readonly string $uf,
        public readonly string $email,
    ) {
    }
}
