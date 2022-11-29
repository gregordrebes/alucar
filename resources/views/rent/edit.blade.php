@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Aluguel</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rent.index') }}"> Voltar</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)

    <div class="alert alert-danger">
        <strong>Opa!</strong> Ocorreram alguns problemas com sua entrada.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>

@endif


{!! Form::model($rent, ['method' => 'PATCH','route' => ['rent.update', $rent->id]]) !!}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Veículo:</strong>
            {{ $vehicle->id }} - {{ $vehicle->name }} - {{ $vehicle->detail }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Valor:</strong>
            {!! Form::number('valor_total', $rent->valor_total, ['class' => 'form-control']) !!}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Data inicial:</strong>
            {!! Form::date('data_inicial', $rent->data_inicial, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Data final:</strong>
            {!! Form::date('data_final', $rent->data_final, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</div>

{!! Form::close() !!}

<p class="text-center text-primary"><small>Alucar.org</small></p>

@endsection

