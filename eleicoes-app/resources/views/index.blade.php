@extends("layout")

@section("conteudo")

<div class="nghost flex-1">
    <div class="mt-4 mb-2">
        <label class="text-sm font-semibold activatable color-primary button-small button-clear">Transmissão de Dados off-line</label>
    </div>
    <div class="p-2 pb-3 md:p-3 md:pt-4 bg-white rounded shadow-md text-gray-800 mb-3">
        <div class="flex flex-row items-center">
            <div class="xs:text-lg font-bold"> 100,00% das seções totalizadas <br>
                <small class="text-roxo text-xs font-bold">(Horário local)</small>
            </div>
            <button class="btn-atualizar ml-auto"><img src="{{ asset('img/atualizar.gif') }}" width="15" alt="Atualizar Icon"> Transferir</button>
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
@endsection
