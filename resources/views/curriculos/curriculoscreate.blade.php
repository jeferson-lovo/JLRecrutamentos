@extends('layouts.principal')

@section('main')
<div class="container">
    <form action="{{ Route('curriculos.store') }} " method="post">
        @csrf  <!-- envia token para segurança para conseguir salvar um formulario-->
        <div class="input-group">
            <input type="text" placeholder="nome curriculo" name="nome_curriculo">
            @error('nome_curriculo') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="sexo curriculo" name="sexo_curriculo">
            @error('sexo_curriculo') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="nacionalidade curriculo" name="nacionalidade_curriculo">
            @error('nacionalidade_curriculo') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="cidade atual" name="cidade_atual_curriculo">
            @error('cidade_atual_curriculo') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="uf atual" name="uf_atual_curriculo">
            @error('uf_atual_curriculo') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="telefone curriculo" name="telefone_curriculo">
            @error('telefone_curriculo') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="email curriculo" name="email_curriculo">
            @error('email_curriculo') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="linkedin" name="linkedin">
            @error('linkedin') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="instagran" name="instagran">
            @error('instagran') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="site" name="site_curriculo">
            @error('site_curriculo') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="atualizacao curriculo" name="atualizacao_curriculo">
            @error('atualizacao_curriculo') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="comentario_rh" name="comentario_rh">
            @error('comentario_rh') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="nota_rh" name="nota_rh">
            @error('nota_rh') <!-- aqui traz o erro definido no controlador -->
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

            <select name="experiencia_id" class="form-control">
                @foreach($experiencias as $experiencia)
                    <option value="{{ $experiencia->id }}" {{ $experiencia->id == $experiencia->experiencia_id ? 'selected' : '' }}>
                        {{ $experiencia->nome_empresa }}
                    </option>
                @endforeach
            </select>

            <select name="aperfeicoamento_id" class="form-control">
                @foreach($aperfeicoamentos as $aperfeicoamento)
                    <option value="{{ $aperfeicoamento->id }}" {{ $aperfeicoamento->id == $aperfeicoamento->aperfeicoamento_id ? 'selected' : '' }}>
                        {{ $aperfeicoamento->nome_aperfeicoamento }}
                    </option>
                @endforeach
            </select>

            <select name="formacao_id" class="form-control">
                @foreach($formacoes as $formacao)
                    <option value="{{ $formacao->id }}" {{ $formacao->id == $formacao->formacao_id ? 'selected' : '' }}>
                        {{ $formacao->nome_curso }}
                    </option>
                @endforeach
            </select>

            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        <a href="{{ Route('curriculos.index') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true" >Cancelar </a>
    </form>
</div>

@endsection
