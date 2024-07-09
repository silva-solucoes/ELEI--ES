<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGPE - Sistema de Gerenciamento de Pesquisas Eleitorais</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Arquivos CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="pt-safe bg-ion-primary-alt text-roxo">
        <div class="nghost flex flex-row flex-wrap items-center h-20">
            <div role="button" tabindex="0" class="leading-tight tracking-tight focus-ring" title="Clique para escolher outra eleição" aria-disabled="false">
                <div class="flex flex-row items-center">
                    <i class="bi bi-list" style="font-size: 18px;"></i>
                    <img src="{{ asset('img/logo.png') }}" height="46" role="presentation" class="ml-3">
                    <div class="ml-5 mr-2">
                        <span class="normal-text"><b class="bold-text">SGPE</b> - Pesquisa Eleitoral 2024</span>
                    </div>
                    <i class="bi bi-chevron-down md hydrated" style="font-size: 18x;"></i>
                </div>
            </div>
            <nav class="self-end ml-auto pt-2">
                <ul class="flex flex-row justify-end">
                    <li><a class="nav-link focus-ring {{ Request::is('/') ? 'nav-ativo' : '' }}" href="{{ url('/') }}">Início</a></li>
                    <li><a class="nav-link focus-ring {{ Request::is('transmissao') ? 'nav-ativo' : '' }}" href="{{ url('/transmissao') }}">Transmissão</a></li>
                    <li><a class="nav-link focus-ring {{ Request::is('entrar') ? 'nav-ativo' : '' }}" href="{{ url('/entrar') }}"><i class="bi bi-box-arrow-in-right"></i> Entrar na conta</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="py-2 localidade-pad bg-ion-primary bg-decorado bg-localidade rounded-b text-roxo">
        <div class="container mx-auto">
            <div class="nghost flex flex-row items-center">
                <div title="Alterar localidade" role="button" class="py-3 focus-ring" tabindex="0" aria-disabled="false">
                    <div class="flex items-center lg:text-2xl xl:text-3xl">
                        <img src="{{ asset('assets/icones/marcador.svg') }}" class="text-white text-xl md hydrated" role="img">
                        <div class="ml-2 mr-3 text-roxo font-bold leading-tight"> Lajes, Rio Grande do Norte </div>
                    </div>
                </div>
                <div class="ml-auto">
                    <button title="Pesquisar candidato" aria-disabled="true" class="md button button-solid button-has-icon-only button-disabled ion-activatable ion-focusable hydrated" disabled>
                        <img src="{{ asset('assets/lupa.svg') }}" class="text-lg md hydrated" role="img">
                    </button>
                </div>
            </div>
        </div>
    </div>

    @yield("conteudo")

    <div class="footer">
        <div class="container">
            <footer class="footer-content">
                <nav class="nav">
                    <ul class="nav-list">
                        <li><a href="{{ url('/') }}">Início</a></li>
                        <li><a href="{{ url('/eleicao/favoritos') }}">Favoritos</a></li>
                        <li><a href="{{ url('/eleicao/dados-de-urna') }}">Dados de Urna</a></li>
                        <li><a href="{{ url('/termos-de-uso') }}">Termos de uso</a></li>
                    </ul>
                    <div class="version">Versão 22.11.09 (9fadcca)</div>
                </nav>
                <div class="app-section">
                    <section class="app-download">
                        <h4>Baixe nosso app</h4>
                        <div class="app-buttons">
                            <a href="https://play.google.com/store/apps/details?id=br.jus.tse.resultados&amp;utm_source=resultados" target="_blank">
                                <img src="{{ asset('assets/badge-android.png') }}" alt="Disponível no Google Play" width="114" height="34">
                            </a>
                            <a href="https://apps.apple.com/br/app/resultados/id1136359313" target="_blank">
                                <img src="{{ asset('assets/badge-ios.svg') }}" alt="Baixar na App Store" width="102" height="34">
                            </a>
                        </div>
                    </section>
                </div>
                <a href="//tse.jus.br/" class="tse-logo">
                    <img src="{{ asset('assets/tse-claro.svg') }}" width="128" height="58" alt="Tribunal Superior Eleitoral">
                </a>
            </footer>
        </div>
    </div>
</body>

</html>
