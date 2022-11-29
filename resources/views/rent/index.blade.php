@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Aluguéis do usuário</h2>
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
     <th>Id Aluguel</th>
     <th>Veículo</th>
     <th>Valor total</th>
     <th>Data inicio</th>
     <th>Data fim</th>
     <th width="280px">Ação</th>
  </tr>
    @foreach ($rents as $key => $rent)
    @php
        $veiculo = App\Models\Product::find($rent->id_veiculo);
    @endphp
    <tr>
        <td>{{ $rent->id }}</td>
        <td>{{ $veiculo->name }}</td>
        <td>{{ $rent->valor_total }}</td>
        <td>{{ $rent->data_inicial }}</td>
        <td>{{ $rent->data_final }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('rent.edit',$rent->id) }}">Editar</a>

            {!! Form::open(['method' => 'DELETE','route' => ['rent.destroy', $rent->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Devolver', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach

</table>

{!! $rents->render() !!}

<p class="text-center text-primary"><small>Alucar.org</small></p>

@endsection
