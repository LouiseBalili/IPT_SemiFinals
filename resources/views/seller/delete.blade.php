@extends('base')

@section('content')

    <h1 style="text-align:center">Confirm Delete Seller</h1>

    <div class="row w-50" style="margin-left: 275px;">
        <div class="col md-5">
            {!! Form::model($seller, ['url'=>'/delete-seller/' . $seller->id]) !!}
                <div class="infos">
                    <div class="mb-3">
                        {!! Form::label("name", "User Name:") !!}
                        {!! Form::text("name", null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="mb-3">
                        {!! Form::label("email", "Email:") !!}
                        {!! Form::text("email", null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="mb-3">
                        {!! Form::label("product_type", "Product_type:") !!}
                        {!! Form::text("product_type", null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="mb-3">
                        {!! Form::label("total_sales", "Total_sales:") !!}
                        {!! Form::number("total_sales", null, ['class'=>'form-control']) !!}
                    </div>

                </div>

            </div>

            {!! Form::close() !!}

            <form action="{{url('/confirmdelete-seller/'.$seller->id)}}" method="post">
                {{ method_field('DELETE')}}
                {{ csrf_field()}}
                <div class="form-group float-end">
                    <button href="/sellers" class="btn btn-primary m-1" type="submit"> <i class="fa fa-check" aria-hidden="true"></i> &nbsp; Yes</button>
                    <a href="/sellers" class="btn btn-danger m-1" type="submit"> <i class="fa fa-times" aria-hidden="true"></i> &nbsp; No</a>
                </div>
            </form>
        </div>
    </div>
@endsection
