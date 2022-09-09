@extends('users.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
            <div class="pull-right">
                <a class="btn" style="background-color: darkgray;color: white" href="{{ route('users.index') }}">Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Birthdate:</strong>
                    <input type="date" name="birthdate" value="{{ $user->birthdate }}" required class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CPF:</strong>
                    <input type="text" id="cpf" name="cpf" value="{{ $user->cpf }}" minlength="14" required class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <select id="gender" name="gender" required class="form-control">
                        <option value="" disabled>Select</option>
                        <option value="M" {{ $user->gender == 'M' ? 'selected' : '' }}>Male</option>
                        <option value="F" {{ $user->gender == 'F' ? 'selected' : '' }}>Female</option>
                        <option value="O" {{ $user->gender == 'O' ? 'selected' : '' }}>Others</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="text" id="phone" name="phone" value="{{ $user->phone }}" minlength="16" required class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{ $user->email }}" required class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
    jQuery(document).ready(function($)
    {
        /* PHONE MASK */
        $('#phone').mask('(00) 0 0000-0000');

        /* CPF MASK */
        var CpfMask = function (val) {
            return val.replace(/\D/g, '').length <= 14 ? '000.000.000-00' : '';
        },
        cpfOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(CpfMask.apply({}, arguments), options);
            }
        };
        $('#cpf').mask(CpfMask, cpfOptions);
    });
</script> 