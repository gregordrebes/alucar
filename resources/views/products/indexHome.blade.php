@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Veículos Disponíveis</h3>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


<div class="tz-gallery">

    <div class="row">

        @forelse ($products as $product)
        <div class="col-md-4" style='border: 1px solid black;'>
            <div class="card mb-4 box-shadow">
              <img class="card-img-top"  alt="Imagem {{$product->name}}" style="height: 225px; width: 100%; display: block;" src="{{ url("/image/$product->image") }}" data-holder-rendered="true">
              <div class="card-body">
                <p class="card-text">
                    <h3>{{ $product->name }}</h3>

                    {{ $product->detail }}
                    <br>
                    R$ {{ $product->price }}
                    <br>
                    Adicionado em {{ $product->created_at }}
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{ route('rent.create', ["id_product"=>$product->id]) }}" class="btn btn-sm btn-outline-secondary">Alugar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @empty

        @endforelse

    </div>


</div>

    {!! $products->links() !!}


    <p class="text-center text-primary"><small>Alucar.org</small></p>

@endsection
