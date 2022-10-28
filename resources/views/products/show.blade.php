@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Visualização do Veículo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar</a>
            </div>
        </div>
    </div>


    <div class="row">    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagem:</strong>
                <img src="{{ url("/image/$product->image") }}" width="300px">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $product->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Preço R$:</strong>
                {{ $product->price }}
            </div>
        </div>        

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detalhes:</strong>
                {{ $product->detail }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Inclusão</strong>
                {{ $product->created_at }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-15">
            <div class="form-group">
                <strong>Valor Simulado do Aluguel</strong>
                R$ 150,00 Taxa Fixa
            </div>
        </div>

        </div>

    </div>

    <p class="text-center text-primary"><small>Alucar.org</small></p>

    @endsection

