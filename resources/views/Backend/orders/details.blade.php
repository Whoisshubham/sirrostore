@extends('Backend.layouts.app')
@section('content')
    <div class="inner-body">

        <!-- Page Header -->

        <div class="page-header ">

            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">State</li>
                </ol>
            </div>

            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Order Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Size</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quintity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productDetails as $key => $order)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $order->order_id ?? null }}</td>
                            <td><a href="{{ asset($order->image ?? null) }}"><img width="50px" height="50px"
                                        src="{{ asset($order->image ?? null) }}"></a></td>

                            <td>{{ $order->product_name ?? null }}</td>
                            <td>{{ $order->size ?? null }}</td>
                            <td>{{ $order->price ?? null }}</td>
                            <td>{{ $order->qty ?? null }}</td>
                            <td>{{ (int) $order->price * (int) $order->qty }}</td>
                            <td>{{ $order->created_at ?? null }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
        <div class=" bg-white p-3">
            <div class="row">
                @php
                    $getDetails = orderAddress($productDetails[0]->order_id);
                @endphp
                <h1>Shiping To </h1>
                <div id="billing" class="col-md-12">
                    <div> <strong> First Name:- </strong> {{ $getDetails->fname ?? null }}</div>
                    <br>
                    <div> <strong> Last Name:- </strong> {{ $getDetails->lname ?? null }}</div>
                    <br>
                    <div> <strong> Phone:- </strong>{{ $getDetails->phone ?? null }}</div>
                    <br>
                    <div> <strong> Address:- </strong> {{ $getDetails->address ?? null }}</div>
                    <br>
                    <div> <strong> City:- </strong> {{ $getDetails->cityName->name ?? null }}</div>
                    <br>
                    <div> <strong> State:- </strong>{{ $getDetails->stateName->name ?? null }}</div>
                    <br>
                    <div> <strong> Country:- </strong> {{ $getDetails->countrieName->name ?? null }}</div>
                </div>

            </div>
        </div>

    </div>
    <style>
        #billing > span{
            padding:20px 20px;
        }
    </style>
@endsection
