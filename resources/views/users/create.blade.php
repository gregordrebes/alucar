@extends('users.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn" style="background-color: darkgray;color: white" href="{{ route('users.index') }}">Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('users.store') }}" method="POST">
    @csrf
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" required class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birthdate:</strong>
                <input type="date" name="birthdate" required class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CPF:</strong>
                <input type="text" id="cpf" name="cpf" minlength="14" required class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <select id="gender" name="gender" required class="form-control">
                    <option value="" selected disabled>Select</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Others</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <input type="text" id="phone" name="phone" minlength="16" required class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" required class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success">Save</button>
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