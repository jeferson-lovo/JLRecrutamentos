@extends('layouts.principal')

@section('main')
<div class="container">
    <form action="{{ Route('oportunidades.store') }} " method="post">
        @csrf  <!-- envia token para segurança para conseguir salvar um formulario-->
        <div class="input-group">
            <input type="text" placeholder="Descricao Oportunidade" name="descricao_oportunidade">
            @error('descricao_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Titulo Oportunidade" name="titulo_oportunidade">
            @error('titulo_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Requisitos Oportunidade" name="requisitos_oportunidade">
            @error('requisitos_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Beneficio Oportunidade" name="beneficio_oportunidade">
            @error('beneficio_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="date" placeholder="Data abertura oportunidade" name="data_abertura_oportunidade">
            @error('data_abertura_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="date" placeholder="Data fechamento oportunidade" name="data_fechamento_oportunidade">
            @error('data_fechamento_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="salario oportunidade" name="salario_oportunidade">
            @error('salario_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="quantidade oportunidade" name="quantidade_oportunidade">
            @error('quantidade_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror

                <!-- Select de Estado (UF) -->
            <div class="mb-3">
                <label for="uf_cidade" class="form-label">Estado (UF)</label>
                <select name="uf_cidade" id="uf_cidade" class="form-select" required>
                    <option value="">Selecione o Estado</option>
                    @foreach($ufs as $uf)
                        <option value="{{ $uf }}">{{ $uf }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Select de Cidade -->
            <div class="mb-3">
                <label for="cidade_id" class="form-label">Cidade</label>
                <select name="cidade_id" id="cidade_id" class="form-select" required disabled>
                    <option value="">Selecione a Cidade</option>
                </select>
            </div>

            <!-- Scripts JavaScript e jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
            $(document).ready(function() {
                $('#uf_cidade').on('change', function() {
                    var uf = $(this).val();
                    var cidadeSelect = $('#cidade_id');

                    // Limpa e desabilita o campo de cidades enquanto carrega
                    cidadeSelect.empty().prop('disabled', true).append('<option value="">Carregando...</option>');

                    if (uf) {
                        $.ajax({
                            url: '/cidades/' + uf,
                            type: 'GET',
                            dataType: 'json',
                            data: { uf: uf },
                            success: function(data) {
                                cidadeSelect.empty().prop('disabled', false).append('<option value="">Selecione a Cidade</option>');
                                if (data.length > 0) {
                                    $.each(data, function(key, cidade) {
                                        cidadeSelect.append('<option value="' + cidade.id + '">' + cidade.nome_cidades + '</option>');
                                    });
                                } else {
                                    cidadeSelect.empty().prop('disabled', true).append('<option value="">Nenhuma cidade encontrada</option>');
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("Erro ao buscar cidades:", error);
                                cidadeSelect.empty().prop('disabled', true).append('<option value="">Erro ao carregar cidades</option>');
                            }
                        });
                    } else {
                        // Se nenhum UF for selecionado, limpa e desabilita o campo de cidades
                        cidadeSelect.empty().prop('disabled', true).append('<option value="">Selecione a Cidade</option>');
                    }
                });
            });
            </script>

            <select name="metodologia_id" class="form-control">
                @foreach($metodologias as $metodologia)
                    <option value="{{ $metodologia->id }}" {{ $metodologia->id == $metodologia->metodologia_id ? 'selected' : '' }}>
                        {{ $metodologia->nome_metodologia }}
                    </option>
                @endforeach
            </select>

            <select name="competencia_id" class="form-control">
                @foreach($competencias as $competencia)
                    <option value="{{ $competencia->id }}" {{ $competencia->id == $competencia->competencia_id ? 'selected' : '' }}>
                        {{ $competencia->nome_competencia }}
                    </option>
                @endforeach
            </select>

            <select name="area_id" class="form-control">
                @foreach($areas as $area)
                    <option value="{{ $area->id }}" {{ $area->id == $area->area_id ? 'selected' : '' }}>
                        {{ $area->nome_area }}
                    </option>
                @endforeach
            </select>

            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        <a href="{{ Route('oportunidades.index') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true" >Cancelar </a>
    </form>
</div>

@endsection
