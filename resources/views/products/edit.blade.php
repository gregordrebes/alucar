@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Produto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar</a>
            </div>
        </div>
    </div>


    @if ($errors->any())

        <div class="alert alert-danger">
            <strong>Opa!</strong> Ocorreram alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif


    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">

    	@csrf

        @method('PUT')


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nome:</strong>
		            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detalhes:</strong>
		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Preço R$:</strong>
		            <input type="number" name="price" value="{{ $product->price }}" class="form-control" placeholder="Name">
		        </div>
		    </div>            
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="{{ url("/image/$product->image") }}" width="150px">
                </div>
            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Confirmar</button>
		    </div>

		</div>

    </form>


    <p class="text-center text-primary"><small>Alucar.org</small></p>


@endsection