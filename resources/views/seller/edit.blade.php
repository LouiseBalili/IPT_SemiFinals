@extends('base')

@section('content')
<h1 style="text-align: center;">Edit Seller</h1>

 <div class="row w-50" style="margin-left: 275px;">
    <div class="col md-5">
        {!! Form::model($seller, ['url'=>'/edit-seller/' .$seller->id, 'method'=>'put']) !!}

        <div class="mb-3">
            {!! Form::label("name", "User Name:") !!}
            {{ Form::text("name", null, ['class' => 'form-control']) }}
        </div>

        <div class="mb-3">
            {!! Form::label("email", "Email:") !!}
            {{ Form::text("email", null, ['class' => 'form-control']) }}
        </div>

        <div class="mb-3">
            {!! Form::label("product_type", "Product_type:") !!}
            {{ Form::text("product_type", null, ['class' => 'form-control']) }}
        </div>

        <div class="mb-3">
            {!! Form::label("total_sales", "Total_sales:") !!}
            {{ Form::text("total_sales", null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group float-end">
            <button class="btn btn-primary m-1" type="submit">
                <i class="fa-solid fa-square-pen" aria-hidden="true"></i> &nbsp; Update
            </button>
            <a href="{{url('/sellers')}}" class="btn btn-danger m-1"> <i class="fa fa-ban" aria-hidden="true"></i> &nbsp; Cancel</a>
        </div>

        {!! Form::close() !!}
    </div>
 </div>
@endsection
