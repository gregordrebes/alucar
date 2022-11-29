@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Novo Aluguel</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> Voltar</a>
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


{!! Form::open(array('route' => ['rent.store', ["id_veiculo"=>$vehicle->id]],'method'=>'POST')) !!}

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
            {!! Form::number('valor_total', $vehicle->price, ['class' => 'form-control']) !!}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Data inicial:</strong>
            {!! Form::date('data_inicial', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Data final:</strong>
            {!! Form::date('data_final', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</div>

{!! Form::close() !!}

<p class="text-center text-primary"><small>Alucar.org</small></p>

@endsection
