@extends('Backend.layouts.app')
@section('content')
    <div class="mt-5 mb-5">
        <!-- Page Header -->
        <form class="submitForm" action="{{ url('admin/offer-store') }}" method="POST">
            @csrf
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                    class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                </div>
                <div class="d-flex">
                    <div class="justify-content-center">
                        <button type="submit" class="btn btn-primary"> Submit
                        </button>


                    </div>
                </div>

            </div>

            <div>

                <div class="row">
                    @foreach ($orderDetails as $key => $value)
                        <div class="card col-lg-2 col-md-3 col-sm-6" style="width: 18rem;">
                            <label for="{{ $key + 11111 }}">
                                <input id="{{ $key + 11111 }}"
                                    @isset($value->OfferOne)
                                    checked
                                @endisset
                                    name="product_id[]" value="{{ $value->id ?? null }}" type="checkbox">
                                @php
                                    $images = json_decode($value->image);
                                @endphp
                                <img class="card-img-top" src="{{ asset($images[0] ?? null) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $value->product_name ?? null }}</h5>
                                </div>
                            </label>
                        </div>
                    @endforeach
                </div>

            </div>
        </form>
    </div>
@endsection
