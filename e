[33mcommit 3d473f60066887c8186ed85ddcacb797f5236d3d[m[33m ([m[1;36mHEAD[m[33m -> [m[1;32mmain[m[33m)[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 18:36:42 2025 -0400

            modified:   src/SicoobCobrancaBancariaClient.php

[33mcommit 13c5895d523254e0f0abf9d237bc488a623dfeda[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 18:24:09 2025 -0400

            modified:   src/SicoobClientBase.php

[33mcommit 8cce80a9e7905df76056c356a09301b5e9fe5931[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 18:20:52 2025 -0400

            modified:   src/SicoobClientBase.php

[33mcommit 224577dcac28897c3bcca869dd42bbd100c412cb[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 18:19:16 2025 -0400

            modified:   src/SicoobClientBase.php

[33mcommit 9a96ecdb78057b1ec4707e4a48a9cd105ee247d6[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 18:18:47 2025 -0400

            modified:   src/SicoobClientBase.php

[33mcommit 08ddf3d54f74fd9ceab89cbc939604d7f9a967c2[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 18:18:26 2025 -0400

            modified:   src/SicoobClientBase.php

[33mcommit 1d2396ef0515cf97baf8b0c08adf16848e745f2d[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 18:12:15 2025 -0400

            modified:   src/SicoobCobrancaBancariaClient.php

[33mcommit 2cc465bd40d4e4f437bcbe76dc3056fb66ec6f9a[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 18:08:35 2025 -0400

            modified:   src/SicoobCobrancaBancariaClient.php

[33mcommit 6ce722ca8548a9c3c771c11b6046ab4de768d1a5[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 17:58:46 2025 -0400

            modified:   src/Dto/CobrancaBancaria/BaixarBoletoRequest.php

[33mcommit da57a84edc94054ef9ffdc3f85a78e912cf8818c[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 17:49:09 2025 -0400

            modified:   src/Dto/CobrancaBancaria/BaixarBoletoRequest.php

[33mcommit fe1b7f639f84e09941bd968dbf006fcf9594ddfa[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 17:33:12 2025 -0400

            modified:   README.md

[33mcommit 8c5226c358569fe162564b49b6405fa504799916[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 17:31:50 2025 -0400

            modified:   README.md

[33mcommit c8a3e676257ab6d2f192217d590e06f70cc22f75[m
Author: Luiz Silva <lpcs007@gmail.com>
Date:   Fri May 23 17:21:18 2025 -0400

            new file:   .gitignore
            new file:   LICENSE
            new file:   README.md
            new file:   composer.json
            new file:   src/Dto/AuthenticationToken.php
            new file:   src/Dto/CobrancaBancaria/BaixarBoletoMensagem.php
            new file:   src/Dto/CobrancaBancaria/BaixarBoletoRequest.php
            new file:   src/Dto/CobrancaBancaria/BaixarBoletoResponse.php
            new file:   src/Dto/CobrancaBancaria/ConsultaBoletoRequest.php
            new file:   src/Dto/CobrancaBancaria/ConsultaBoletoResponse.php
            new file:   src/Dto/CobrancaBancaria/ConsultarMovimentacoesRequest.php
            new file:   src/Dto/CobrancaBancaria/ConsultarMovimentacoesResponse.php
            new file:   src/Dto/CobrancaBancaria/DownloadMovimentacoesRequest.php
            new file:   src/Dto/CobrancaBancaria/DownloadMovimentacoesResponse.php
            new file:   src/Dto/CobrancaBancaria/IncluirBoletoRequest.php
            new file:   src/Dto/CobrancaBancaria/IncluirBoletoResponse.php
            new file:   src/Dto/CobrancaBancaria/ProrrogacaoDataVencimento.php
            new file:   src/Dto/CobrancaBancaria/ProrrogarDatasVencimentoRequest.php
            new file:   src/Dto/CobrancaBancaria/ProrrogarDatasVencimentoResponse.php
            new file:   src/Dto/CobrancaBancaria/ProrrogarDatasVencimentoResultado.php
            new file:   src/Dto/CobrancaBancaria/ResultadoStatus.php
            new file:   src/Dto/CobrancaBancaria/SegundaViaBoletoRequest.php
            new file:   src/Dto/CobrancaBancaria/SegundaViaBoletoResponse.php
            new file:   src/Dto/CobrancaBancaria/SolicitarMovimentacoesRequest.php
            new file:   src/Dto/CobrancaBancaria/SolicitarMovimentacoesResponse.php
            new file:   src/Dto/ContaCorrente/ConsultaExtratoRequest.php
            new file:   src/Dto/ContaCorrente/ConsultaExtratoResponse.php
            new file:   src/Dto/ContaCorrente/ConsultaSaldoRequest.php
            new file:   src/Dto/ContaCorrente/ConsultaSaldoResponse.php
            new file:   src/Dto/Pix/ConsultaPixRequest.php
            new file:   src/Dto/Pix/ConsultaPixResponse.php
            new file:   src/Dto/Pix/NovaCobrancaVencimentoRequest.php
            new file:   src/Dto/Pix/NovaCobrancaVencimentoResponse.php
            new file:   src/Dto/TokenRequest.php
            new file:   src/Dto/TokenResponse.php
            new file:   src/Exception/SicoobException.php
            new file:   src/Helper/CobrancaBancaria/MovimentacoesDownloader.php
            new file:   src/Model/CobrancaBancaria/Boleto.php
            new file:   src/Model/CobrancaBancaria/HistoricoBoleto.php
            new file:   src/Model/CobrancaBancaria/MensagensInstrucao.php
            new file:   src/Model/CobrancaBancaria/Movimentacao.php
            new file:   src/Model/CobrancaBancaria/MovimentacaoDownload.php
            new file:   src/Model/CobrancaBancaria/Pagador.php
            new file:   src/Model/CobrancaBancaria/ResumoMovimentacoes.php
            new file:   src/Model/CobrancaBancaria/SituacaoBoleto.php
            new file:   src/Model/CobrancaBancaria/SolicitacaoMovimentacao.php
            new file:   src/Model/ContaCorrente/Extrato.php
            new file:   src/Model/ContaCorrente/Saldo.php
            new file:   src/Model/ContaCorrente/Transacao.php
            new file:   src/Model/Pix/CalendarioSimples.php
            new file:   src/Model/Pix/CalendarioVencimento.php
            new file:   src/Model/Pix/CobrancaImediata.php
            new file:   src/Model/Pix/InfoAdicional.php
            new file:   src/Model/Pix/JurosMulta.php
            new file:   src/Model/Pix/PaymentLocation.php
            new file:   src/Model/Pix/Pessoa.php
            new file:   src/Model/Pix/Pix.php
            new file:   src/Model/Pix/ValorCobranca.php
            new file:   src/SerializerFactory.php
            new file:   src/SicoobClientBase.php
            new file:   src/SicoobCobrancaBancariaClient.php
            new file:   src/SicoobContaCorrenteClient.php
            new file:   src/SicoobPixClient.php
            new file:   src/Types/ContaCorrente/TipoTransacao.php
            new file:   src/Types/Pix/TipoCob.php
            new file:   src/Types/TokenScope.php
