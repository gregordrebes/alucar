@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Criar Novo Produto</h2>
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


    {!! Form::open(array('route' => 'products.store','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
    
         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nome:</strong>		            
                    {!! Form::text('name', null, array('placeholder' => 'Descrição do Veículo','class' => 'form-control')) !!}
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Marca</strong>
                    <select id="marca" name="marca" required class="form-control">
                        <option value="" selected disabled>Selecione</option>
                        <option value="FIAT">FIAT</option>
                        <option value="BMW">BMW</option>
                        <option value="AUDI">AUDI</option>
                        <option value="FORD">FORD</option>
                        <option value="HONDA">HONDA</option>
                        <option value="PORSCHE">PORSCHE</option>
                    </select>
                </div>
            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detalhes:</strong>
                    {!! Form::textarea('detail', null, array('placeholder' => 'Detalhes','class' => 'form-control')) !!}		            
		        </div>
		    </div>


		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Preço:</strong>
                    {!! Form::number('price', null, array('placeholder' => 'Preço','class' => 'form-control')) !!}
		        </div>
		    </div>            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagem do Produto:</strong>
                    {!! Form::file('image', null) !!}                    
                </div>
            </div>            

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Confirmar</button>
		    </div>

		</div>
    </form>


<p class="text-center text-primary"><small>Alucar.org</small></p>

@endsection