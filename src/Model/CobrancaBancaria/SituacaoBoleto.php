<?php

namespace LuizSilvaDev\Sicoob\Model\CobrancaBancaria;

enum SituacaoBoleto : string
{
    case EM_ABERTO = 'Em Aberto';
    case BAIXADO = 'Baixado';
    case LIQUIDADO = 'Liquidado';
}
