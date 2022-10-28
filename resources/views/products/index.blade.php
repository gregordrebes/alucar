@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Produtos</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::to('/allproduct/pdf') }}">Exportar para PDF</a>
                <a class="btn btn-primary" href="{{ URL::to('/allproduct/csv') }}">Exportar para CSV</a>
                @can('product-create')
                <a class="btn btn-success" href="{{ route('products.create') }}"> Novo Produto</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>#</th>            
            <th>Imagem</th>
            <th>Nome</th>
            <th>Detalhes</th>
            <th>Preço</th>
            <th>Data Inclusão</th>
            <th width="280px">Ação</th>
        </tr>

	    @foreach ($products as $product)
	    <tr>
	        <td>{{ ++$i }}</td>
            <td><img src="{{ url("/image/$product->image") }}" width="80px"></td>
            
	        <td>{{ $product->name }}</td>
	        <td>{{ $product->detail }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->created_at }}</td>
	        <td>     

                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Visualizar</a>
                @can('product-edit')
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>
                @endcan                
                
                @can('product-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endcan 
	        </td>
	    </tr>
	    @endforeach
    </table>

    {!! $products->links() !!}


    <p class="text-center text-primary"><small>Alucar.org</small></p>

@endsection