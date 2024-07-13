<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGPE - Sistema de Gerenciamento de Pesquisas Eleitorais</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <!-- Arquivos CSS do Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="pt-safe bg-ion-primary-alt text-roxo">
        <div class="nghost flex flex-row flex-wrap items-center h-20">
            <div role="button" tabindex="0" class="leading-tight tracking-tight focus-ring" title="Clique para escolher outra eleição" aria-disabled="false">
                <div class="flex flex-row items-center">

                    <img src="{{ asset('img/SGPE-logo.png') }}" height="46" role="presentation" class="ml-3">
                    <!--<div class="ml-5 mr-2">
                        <span class="normal-text"><b class="bold-text">SGPE</b> - Pesquisa Eleitoral 2024</span>
                    </div>-->

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
                        <img src="{{ asset('img/marcador.png') }}" width="25" height="25" class="text-white text-xl md hydrated" role="img">
                        <div class="ml-2 mr-3 text-roxo bold-text leading-tight"> Lajes, Rio Grande do Norte </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield("conteudo")

    <footer id="footer" class="footer position-relative light-background">

        <div class="container footer-top">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><a href="#">Início</a></li>
                        <li><a href="#">Transmissão</a></li>
                        <li><a href="#">Termo de Serviços</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Produto:</h4>
                    <a href="#" target="_blank">
                        <img src="{{ asset('img/logo-footer.png') }}" alt="Disponível no Google Play" width="120" height="80">
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Desenvolvido por</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>

                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Pesquisa Política</strong><span>Todos os direitos reservados</span></p>
            <div class="credits">
                Versão <span>1.0</span>
            </div>
        </div>

    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/popper.min.js') }}" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
