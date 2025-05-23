<?php

declare(strict_types=1);

namespace LuizSilvaDev\Sicoob;

use LuizSilvaDev\Sicoob\Dto\AuthenticationToken;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\BaixarBoletoRequest;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\BaixarBoletoResponse;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\ConsultaBoletoRequest;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\ConsultaBoletoResponse;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\ConsultarMovimentacoesRequest;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\ConsultarMovimentacoesResponse;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\DownloadMovimentacoesRequest;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\DownloadMovimentacoesResponse;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\ProrrogarDatasVencimentoRequest;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\ProrrogarDatasVencimentoResponse;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\IncluirBoletoRequest;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\SegundaViaBoletoRequest;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\SegundaViaBoletoResponse;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\IncluirBoletoResponse;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\SolicitarMovimentacoesRequest;
use LuizSilvaDev\Sicoob\Dto\CobrancaBancaria\SolicitarMovimentacoesResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Sicoob Cobrança Bancária specific client.
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class SicoobCobrancaBancariaClient extends SicoobClientBase
{
    private const PROD_API_URL = 'https://api.sicoob.com.br/cobranca-bancaria/v3';
    private const SANDBOX_API_URL = 'https://sandbox.sicoob.com.br/sicoob/sandbox/cobranca-bancaria/v3';

    public function __construct(HttpClientInterface $client)
    {
        parent::__construct(
            $client,
            self::PROD_API_URL,
            self::SANDBOX_API_URL,
        );
    }

    public function incluirBoleto(
        AuthenticationToken $token,
        IncluirBoletoRequest $request
    ): IncluirBoletoResponse {
        return $this->authenticatedRequest(
            method: 'POST',
            path: '/boletos',
            token: $token,
            requestData: $request->boleto,
            expectedStatusCode: 200,
            responseType: IncluirBoletoResponse::class
        );
    }

    public function prorrogarDatasVencimento(
        AuthenticationToken $token,
        ProrrogarDatasVencimentoRequest $request
    ): ProrrogarDatasVencimentoResponse {
        return $this->authenticatedRequest(
            method: 'PATCH',
            path: '/boletos/prorrogacoes/data-vencimento',
            token: $token,
            requestData: $request->prorrogacoes,
            expectedStatusCode: 207,
            responseType: ProrrogarDatasVencimentoResponse::class
        );
    }

    public function segundaViaBoleto(
        AuthenticationToken $token,
        SegundaViaBoletoRequest $request
    ): SegundaViaBoletoResponse {
        return $this->authenticatedRequest(
            method: 'GET',
            path: '/boletos/segunda-via',
            token: $token,
            requestData: $request,
            expectedStatusCode: 200,
            responseType: SegundaViaBoletoResponse::class
        );
    }

    public function consultarBoleto(
        AuthenticationToken $token,
        ConsultaBoletoRequest $request
    ): ConsultaBoletoResponse {
        return $this->authenticatedRequest(
            method: 'GET',
            path: '/boletos',
            token: $token,
            requestData: $request,
            expectedStatusCode: 200,
            responseType: ConsultaBoletoResponse::class
        );
    }

    public function baixarBoleto(
        AuthenticationToken $token,
        BaixarBoletoRequest $request
    ): BaixarBoletoResponse {
        return $this->authenticatedRequest(
            method: 'POST',
            path: sprintf('/boletos/%s/baixar', $request->nossoNumero),
            token: $token,
            requestData: $request,
            expectedStatusCode: 204,
            responseType: BaixarBoletoResponse::class,
        );
    }

    public function solicitarMovimentacoes(
        AuthenticationToken $token,
        SolicitarMovimentacoesRequest $request
    ): SolicitarMovimentacoesResponse {
        return $this->authenticatedRequest(
            method: 'POST',
            path: '/boletos/movimentacoes',
            token: $token,
            requestData: $request,
            expectedStatusCode: 200,
            responseType: SolicitarMovimentacoesResponse::class,
        );
    }

    public function consultarMovimentacoes(
        AuthenticationToken $token,
        ConsultarMovimentacoesRequest $request
    ): ConsultarMovimentacoesResponse {
        return $this->authenticatedRequest(
            method: 'GET',
            path: '/boletos/movimentacoes',
            token: $token,
            requestData: $request,
            expectedStatusCode: 200,
            responseType: ConsultarMovimentacoesResponse::class,
        );
    }

    public function downloadMovimentacoes(
        AuthenticationToken $token,
        DownloadMovimentacoesRequest $request
    ): DownloadMovimentacoesResponse {
        return $this->authenticatedRequest(
            method: 'GET',
            path: '/boletos/movimentacoes/download',
            token: $token,
            requestData: $request,
            expectedStatusCode: 200,
            responseType: DownloadMovimentacoesResponse::class,
        );
    }
}
