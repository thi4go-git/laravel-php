@extends('layouts.layout01')

@section('conteudo-body')
<img src="{{ asset('img/clear.png') }}" alt="">
<form action="{{ route('arquivos.processar') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="type" value="11">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label" for="form_control_sgUf">Enviar Arquivos</label>
                <div class="input-group">
                    <input type="file" class="form-control input-arquivos" name="arquivos[]" accept=".pdf, .xls" multiple>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" class="form-control input-arquivos" name="arquivos[]">
</form>
@endsection