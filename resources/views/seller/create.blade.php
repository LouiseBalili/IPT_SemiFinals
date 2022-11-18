@extends('base')

@section('content')

<h1 style="text-align:center">Seller Info</h1>

<div class="row">
    <div class="col-md-4 mx-auto">
        {!! Form::open(['url'=>'/sellers', 'method'=>'post']) !!}

        <div class="mb-3">
            {!! Form::label("name", "User Name") !!}
            {!! Form::text("name", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("email", "Email") !!}
            {!! Form::email("email", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("product_type", "Product_type") !!}
            {!! Form::text("product_type", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("total_sales", "Total_sales") !!}
            {!! Form::number("total_sales", null, ['class'=>'form-control']) !!}
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>

        {!! Form::close() !!}
    </div>
</div>

@endsection
