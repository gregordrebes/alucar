@extends('users.layout')
 
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="row">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Laravel CRUD</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 margin-tb" style="padding-bottom: 10px;padding-top: 10px;background-color: ghostwhite">
                    <form action="{{ route('/users/search') }}" method="POST">
                        @csrf
                        <div>
                            <strong style="padding-left: 15px">Name:</strong>
                        </div>
                        <div class="col-lg-6 margin-tb">
                            <input type="text" name="name" value="{{ $filters ?? '' }}" required class="form-control">     
                        </div>    
                        <div class="col-lg-3 margin-tb">
                            <button type="submit" class="btn btn-success">Search</button>
                        
                            <a class="btn" style="background-color: darkgray;color: white" href="{{ route('users.index') }}">Clear</a>
                        </div>            
                    </form>
                </div>
            </div>
        
            <div class="row">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Birthdate</th>
                        <th>CPF</th>
                        <th>Gender</th>
                        <th width="130px">Phone</th>
                        <th>Email</th>
                        <th width="150px">Action</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td id="birthdate{{ $i++ }}">{{ $user->birthdate }}</td>
                            <td id="cpf{{ $i }}">{{ $user->cpf }}</td>
                            <td>{{ $user->gender == 'M' ? 'Male' : ($user->gender == 'F' ? 'Female' : 'Others')}}</td>
                            <td id="phone{{ $i }}">{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                    
                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>    
    </div>    
</div>
@endsection

@if (isset($filters))
    {{ $users->appends($filters)->links() }}
@else
    {{ $users->links() }}
@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
    //Nas funções abaixo estou usuando o 10 no for, porque a consulta pode retornar essa mesma quantidade de resultados
    jQuery(document).ready(function($)
    {
        for (var i = 0;; i++) 
        {
            /* CPF MASK */
            $("#cpf" + i).mask("999.999.999-99");   

            /* PHONE MASK */
            $('#phone' + i).mask('(00) 0 0000-0000');

            /* DATE MASK */
            var currentRow = $('#birthdate' + i).closest("tr");
            var date = new Date(currentRow.find("td:eq(2)").text().replace(/-/g,"/"));
            $('#birthdate' + i).html(("0"+(date.getMonth()+1)) + '/' + date.getDate() + "/" + date.getFullYear());
            
            if (i >= 10) break;
        }
    });
</script> 