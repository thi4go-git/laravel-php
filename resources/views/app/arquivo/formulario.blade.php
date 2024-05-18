@extends('layouts.layout01')

@section('conteudo-body')
<h1 class="mt-5">Processar Arquivos</h1>
<img src="{{ asset('img/clear.png') }}" alt="">
<form action="{{ route('arquivos.processar') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="type" value="11">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label" for="form_control_sgUf">Enviar Arquivos</label>
                <div class="input-group">
                    <input type="file" class="form-control input-arquivos" name="arquivos[]" accept=".pdf, .xls, .xlsx" multiple>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success form-control input-arquivos" name="arquivos[]">Enviar</button>

</form>
@endsection