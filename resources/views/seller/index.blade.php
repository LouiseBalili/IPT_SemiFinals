@extends('base')

@section('content')

<h1 class="seller">Seller's Details</h1>
    <style>
        .seller {
            text-align: center;
            font-family: Verdana, Tahoma, sans-serif;
            color: black;
        }
    </style>

<table class="table caption-top table-bordered border-primary">
    <thead class="table-dark">
        <tr class="text">
            <th>Name</th>
            <th>Email</th>
            <th>Product_type</th>
            <th>Total_sales</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <style>
            .text {
                text-align: center;
                font-family: Verdana, Tahoma, sans-serif;
                color: beige
            }
        </style>
    </thead>
    <tbody >
        @foreach($sellers as $sell)
            <tr>
                <td>{{$sell->name}}</td>
                <td>{{$sell->email}}</td>
                <td>{{$sell->product_type}}</td>
                <td>{{$sell->total_sales}}</td>
                <td class="text-center">
                    <a href="{{url('/edit-seller/' . $sell->id)}}" class="btn btn-warning">
                        <i class="fa-solid fa-pen"></i>
                    </a></td>

                <td class="text-center">
                    <a href="{{url('/delete-seller/' . $sell->id)}}" class="btn btn-danger">
                        <i class="fa-solid fa-trash-can"></i>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    <div class="float-end">
         <a href="{{url('/sellers/create')}}" class="btn btn-primary">New </a>
    </div>
    <br><br><br>

@endsection
