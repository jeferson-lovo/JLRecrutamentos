@extends('layouts.principal')

@section('main')
<div class="container">
    <form action="{{ Route('formacoes.store') }} " method="post">
        @csrf  <!-- envia token para segurança para conseguir salvar um formulario-->
        <div class="input-group">
            <div>
                <strong>Nivel: </strong>
                <input type="text" placeholder="Nome Da formacao" name="nivel_formacao">
                @error('nivel_formacao') <!-- aqui traz o erro definido no controlador -->
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <strong>Curso:</strong>
                <input type="text" placeholder="Nome do curso" name="nome_curso">
                @error('nome_curso') <!-- aqui traz o erro definido no controlador -->
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <strong>Instituição: </strong>
                <input type="text" placeholder="Nome da Instituição" name="nome_entidade">
                @error('nome_entidade') <!-- aqui traz o erro definido no controlador -->
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <strong>Modalidade: </strong>
                <input type="text" placeholder="modalidade" name="modalidade">
                @error('modalidade') <!-- aqui traz o erro definido no controlador -->
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <strong>Situação: </strong>
                <input type="text" placeholder="situacao" name="situacao">
                @error('situacao') <!-- aqui traz o erro definido no controlador -->
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <strong>Data Inicio: </strong>
                <input type="date" placeholder="Data inicio" name="data_inicio_form">
                @error('data_inicio_form') <!-- aqui traz o erro definido no controlador -->
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <Strong>Data Comclusão: </Strong>
                <input type="date" placeholder="Data fim" name="data_fim_form">
                @error('data_fim_form') <!-- aqui traz o erro definido no controlador -->
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <strong>Observações: </strong>
                <input type="text" placeholder="obs_formacao" name="obs_formacao">
                @error('obs_formacao') <!-- aqui traz o erro definido no controlador -->
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        <br>
        <a href="{{ Route('formacoes.index') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true" >Cancelar </a>
    </form>
</div>

@endsection
