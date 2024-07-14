@extends("layout")

@section("conteudo")

<div class="nghost flex-1">
    <div class="mt-4 mb-2">
        <label class="text-sm bold-text font-semibold activatable color-primary button-small button-clear">Transmissão de Dados off-line</label>
    </div>
    <div class="p-2 pb-3 md:p-3 md:pt-4 bg-white rounded shadow-md text-gray-800 mb-3">
        <div class="flex flex-row items-center">
            <div class="xs:text-lg font-bold"> Transmissão Pendente <br>
                <small class="text-roxo text-xs font-bold">(Dados acumulados prontos para envio)</small>
            </div>
            <button class="btn-atualizar ml-auto"><img src="{{ asset('img/atualizar.gif') }}" width="15" alt="Atualizar Icon" class="me-1"> Transferir</button>
        </div>
        <div class="mt-2 md:mt-3 bg-gray-400 rounded-2xs overflow-hidden">
            <div class="barra-preenchida rounded-2xs" style="width: 100%;"></div>
        </div>
        <div class="flex flex-row flex-wrap items-center mt-2 text-roxo text-xs font-bold leading-none tracking-tight">
            <div>
                <div>Última atualização 31/10/2022 00:18:04</div>
            </div>
        </div>
    </div>
</div>

<div class="nghost rounded flex-1 flex flex-row px-4 pt-2 pb-3 bg-white">
    <div class="flex flex-row px-4 pt-2 pb-3">
        <app-foto-grafico-candidato class="flex-none">
            <div class="foto-grafico-pad flex">
                <div class="flex flex-col rounded-full overflow-hidden">
                    <app-foto-candidato class="rounded-none" role="img">
                        <img src="https://t4.ftcdn.net/jpg/00/64/67/27/360_F_64672736_U5kpdGs9keUll8CRQ3p3YaEv2M6qkVY5.jpg" width="100" height="100" alt="Foto">
                    </app-foto-candidato>
                    <div></div>
                </div>
            </div>
            <svg class="absolute inset-0" viewBox="0 0 42 42">
                <circle stroke="#f4f4f4" cx="21" cy="21" r="20"></circle>
                <circle class="stroke-ion-tertiary transition-stroke" cx="21" cy="21" r="20" stroke-dasharray="61.700879716503536 63.96282642708819" stroke-dashoffset="31.41592653589793"></circle>
            </svg>
        </app-foto-grafico-candidato>
    </div>
    <div class="flex-2 ml-5 pt-1">
        <div class="flex flex-row items-start">
            <div class="flex-2 flex flex-col-reverse">
                <div class="text-gray-700 text-sm font-bold tracking-tight">NOME DO PESQUISADOR</div>
                <div class="text-gray-550 text-xs leading-none">PESQUISADOR – <span aria-label="Número 22.">01</span></div>
            </div>
            <div class="flex flex-col-reverse ml-6 text-right">
                <div class="font-bold text-ion-tertiary text-sm">0,00% &nbsp;•&nbsp; 0.000,00</div>
                <div class="text-gray-550 text-xs leading-none">Avaliações computadas</div>
            </div>
        </div>
        <app-pilula-situacao class="mt-2 text-xs" style="display: block;">
            <ul class="pilula-container flex flex-row flex-wrap font-bold tracking-tighter">
                <div class="bg-gray-300 pilula text-gray-600">PESQUISADOR</div>
            </ul>
        </app-pilula-situacao>
    </div>
</div>

<div class="nghost flex-1">
    <div class="mt-4 mb-2">
        <label class="text-sm bold-text font-semibold activatable color-primary button-small button-clear">Formulário de Avaliação</label>
    </div>
    <div class="p-2 pb-3 md:p-3 md:pt-4 bg-white rounded shadow-md text-gray-800 mb-3">
        <form>
            <div class="mb-3">
                <label class="form-label">Como você avalia a administração atual do prefeito?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="avaliacaoPrefeito" value="excelente" id="avaliacaoPrefeito1">
                    <label class="form-check-label" for="avaliacaoPrefeito1">Excelente</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="avaliacaoPrefeito" value="boa" id="avaliacaoPrefeito2">
                    <label class="form-check-label" for="avaliacaoPrefeito2">Boa</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="avaliacaoPrefeito" value="regular" id="avaliacaoPrefeito3">
                    <label class="form-check-label" for="avaliacaoPrefeito3">Regular</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="avaliacaoPrefeito" value="ruim" id="avaliacaoPrefeito4">
                    <label class="form-check-label" for="avaliacaoPrefeito4">Ruim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="avaliacaoPrefeito" value="pessima" id="avaliacaoPrefeito5">
                    <label class="form-check-label" for="avaliacaoPrefeito5">Péssima</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">A gestão atual tem atendido suas expectativas em relação à saúde pública?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="saudePublica" value="sim" id="saudePublica1">
                    <label class="form-check-label" for="saudePublica1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="saudePublica" value="parcialmente" id="saudePublica2">
                    <label class="form-check-label" for="saudePublica2">Parcialmente</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="saudePublica" value="nao" id="saudePublica3">
                    <label class="form-check-label" for="saudePublica3">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Você considera que a segurança pública na cidade melhorou nos últimos anos?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="segurancaPublica" value="sim" id="segurancaPublica1">
                    <label class="form-check-label" for="segurancaPublica1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="segurancaPublica" value="nao" id="segurancaPublica2">
                    <label class="form-check-label" for="segurancaPublica2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">A administração atual tem sido transparente em suas ações e decisões?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="transparencia" value="sim" id="transparencia1">
                    <label class="form-check-label" for="transparencia1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="transparencia" value="nao" id="transparencia2">
                    <label class="form-check-label" for="transparencia2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Você acha que os investimentos em educação feitos pela atual gestão foram adequados?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="educacao" value="sim" id="educacao1">
                    <label class="form-check-label" for="educacao1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="educacao" value="nao" id="educacao2">
                    <label class="form-check-label" for="educacao2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">A comunicação da atual gestão é clara e objetiva?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="comunicacao" value="sim" id="comunicacao1">
                    <label class="form-check-label" for="comunicacao1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="comunicacao" value="nao" id="comunicacao2">
                    <label class="form-check-label" for="comunicacao2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Você está satisfeito com a qualidade das áreas verdes e parques (praças) na cidade?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="areasVerdes" value="sim" id="areasVerdes1">
                    <label class="form-check-label" for="areasVerdes1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="areasVerdes" value="nao" id="areasVerdes2">
                    <label class="form-check-label" for="areasVerdes2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Você acredita que a cidade oferece boas opções de lazer e cultura?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="lazerCultura" value="sim" id="lazerCultura1">
                    <label class="form-check-label" for="lazerCultura1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="lazerCultura" value="nao" id="lazerCultura2">
                    <label class="form-check-label" for="lazerCultura2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">A infraestrutura de transporte público na cidade é adequada?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="transportePublico" value="sim" id="transportePublico1">
                    <label class="form-check-label" for="transportePublico1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="transportePublico" value="nao" id="transportePublico2">
                    <label class="form-check-label" for="transportePublico2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Você está satisfeito com a limpeza e manutenção das ruas e espaços públicos?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="limpezaPublica" value="sim" id="limpezaPublica1">
                    <label class="form-check-label" for="limpezaPublica1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="limpezaPublica" value="nao" id="limpezaPublica2">
                    <label class="form-check-label" for="limpezaPublica2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">A cidade oferece boas oportunidades de emprego?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="emprego" value="sim" id="emprego1">
                    <label class="form-check-label" for="emprego1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="emprego" value="nao" id="emprego2">
                    <label class="form-check-label" for="emprego2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">A cidade oferece uma boa infraestrutura?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="infraestrutura" value="sim" id="infraestrutura1">
                    <label class="form-check-label" for="infraestrutura1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="infraestrutura" value="nao" id="infraestrutura2">
                    <label class="form-check-label" for="infraestrutura2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Você acha que o custo de vida na cidade é alto?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="custoVida" value="sim" id="custoVida1">
                    <label class="form-check-label" for="custoVida1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="custoVida" value="nao" id="custoVida2">
                    <label class="form-check-label" for="custoVida2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Há problemas recorrentes de falta de água ou energia elétrica na cidade?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="problemasAguaEnergia" value="sim" id="problemasAguaEnergia1">
                    <label class="form-check-label" for="problemasAguaEnergia1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="problemasAguaEnergia" value="nao" id="problemasAguaEnergia2">
                    <label class="form-check-label" for="problemasAguaEnergia2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Você se sente seguro andando pela cidade à noite?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="segurancaNoturna" value="sim" id="segurancaNoturna1">
                    <label class="form-check-label" for="segurancaNoturna1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="segurancaNoturna" value="nao" id="segurancaNoturna2">
                    <label class="form-check-label" for="segurancaNoturna2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Existem problemas de trânsito e congestionamento na cidade?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="problemasTransito" value="sim" id="problemasTransito1">
                    <label class="form-check-label" for="problemasTransito1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="problemasTransito" value="nao" id="problemasTransito2">
                    <label class="form-check-label" for="problemasTransito2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Você considera que a poluição do ar na cidade é um problema?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="poluicaoAr" value="sim" id="poluicaoAr1">
                    <label class="form-check-label" for="poluicaoAr1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="poluicaoAr" value="nao" id="poluicaoAr2">
                    <label class="form-check-label" for="poluicaoAr2">Não</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Há problemas recorrentes de falta de água ou energia elétrica na zona rural?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="problemasRurais" value="sim" id="problemasRurais1">
                    <label class="form-check-label" for="problemasRurais1">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="problemasRurais" value="nao" id="problemasRurais2">
                    <label class="form-check-label" for="problemasRurais2">Não</label>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
