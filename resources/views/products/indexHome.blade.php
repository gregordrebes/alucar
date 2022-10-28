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

        @if (count($products)>0)
        @foreach ($products as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <a class="lightbox" href="">
                    <img src="{{ url("/image/$product->image") }}" alt="Park">
                    <strong>{{ $product->name }}</strong>
                    <strong>{{ $product->detail }}</strong>
                    <strong>R$ {{ $product->price }}</strong>
                </a>
                <strong>Adicionado em {{ $product->created_at }}</strong>
            </div>
        </div>
        @endforeach
        @endif

    </div>
    

</div>
    
    {!! $products->links() !!}


    <p class="text-center text-primary"><small>Alucar.org</small></p>

@endsection