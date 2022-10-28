@extends('layouts.app')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Busca</strong>
        {!! Form::text('busca', null, array('placeholder' => 'Digite um modelo ou ano','class' => 'form')) !!}
        {!! Form::text('filial', null, array('placeholder' => 'Local Retirada','class' => 'form')) !!}
        <a class="btn btn-info" href="/buscar">Buscar</a>
    </div>
    
</div>
<table class="table table-striped table-sm">
    <th>#</th>
    <th>Veículos Disponíveis</th>
    <th>Valor Diária</th>
    <th>   </th>
 
    <tr>
        <td><img src="{{ url("/image/20220920202244.jpg") }}" width="80px"></td>
        <td>UNO MILE 2022</td>
        <td>R$ 180,00</td>
        <td><a class="btn btn-info" href="/teste">Alugar</a>
    </tr>
    <tr>
        <td><img src="{{ url("/image/20220920202244.jpg") }}" width="80px"></td>
        <td>UNO MILE 2021</td>
        <td>R$ 150,00</td>
        <td><a class="btn btn-info" href="/teste">Alugar</a>
    </tr>
    <tr>
        <td><img src="{{ url("/image/20220920202244.jpg") }}" width="80px"></td>
        <td>UNO MILE 2021</td>
        <td>R$ 150,00</td>
        <td><a class="btn btn-info" href="/teste">Alugar</a>
    </tr>
    <tr>
        <td><img src="{{ url("/image/20220920202244.jpg") }}" width="80px"></td>
        <td>UNO MILE 2021</td>
        <td>R$ 150,00</td>
        <td><a class="btn btn-info" href="/teste">Alugar</a>
    </tr>

    <tr>
        <td><img src="{{ url("/image/20220920202244.jpg") }}" width="80px"></td>
        <td>UNO MILE 2021</td>
        <td>R$ 150,00</td>
        <td><a class="btn btn-info" href="/teste">Alugar</a>
    </tr>

</table>
<p class="text-center text-primary"><small>Alucar.org</small></p>
@endsection
