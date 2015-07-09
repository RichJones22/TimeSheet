@extends('app')

@section('content')
    <h1 class="page-heading">Create New Customer</h1>

    {!! Form::open() !!}

        <div class="form-group">
            {!! Form::label('customer_name', 'Name:') !!}
            {!! Form::text('customer_names', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('customer_address', 'Address:') !!}
            {!! Form::text('customer_address_01', null, ['class' => 'form-control']) !!}
            <br/>
            {!! Form::text('customer_address_02', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('customer_city', 'City:') !!}
            {!! Form::text('customer_city', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('customer_state', 'State:') !!}
            {!! Form::text('customer_state', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('customer_zip', 'Zip:') !!}
            {!! Form::text('customer_zip', null, ['class' => 'form-control']) !!}
        </div>


    {!! Form::close() !!}
@endsection