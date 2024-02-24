@extends('Backend.layouts.app')
@section('content')
    <div class="mt-5 mb-5">
        <!-- Page Header -->
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
                    <a data-href="{{ url('admin/import-products') }}" class="btn btn-success text-white add_model"
                        data-bs-toggle="modal" data-bs-target="#add_model"> <i class="fe fe-database"></i> Import</a>
                    <a type="button" class="btn btn-primary" href="{{ url('admin/add-product') }}">
                        <i class="fe fe-plus"></i> Add Product
                    </a>


                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col" class="text-white">#</th>
                    <th scope="col" class="text-white">Product Image</th>
                    <th scope="col" class="text-white">Name</th>
                    <th scope="col" class="text-white">Sub-Categorie</th>
                    <th scope="col" class="text-white">Status</th>
                    <th scope="col" class="text-white">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productList as $key => $product)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>
                            @php
                                $image = json_decode($product->image);
                            @endphp
                            @if ($image == null)
                                <img width="120px" height="80px" src="{{ asset($product->image) ?? null }}"
                                    alt="">
                            @else
                                <img width="120px" height="80px" src="{{ asset($image[0]) ?? null }}" alt="">
                            @endif
                        </td>
                        <td>{{ $product->product_name ?? null }}</td>
                        <td>{{ $product->productCategorie->name ?? null }}</td>

                        <td>
                            @if ($product->status == 1)
                                <a class="btn btn-sm btn-success statusUpdate"
                                    href="{{ url('admin/product-status', [base64_encode($product->id)]) }}">Active</a>
                            @else
                                <a class="btn btn-sm btn-danger statusUpdate"
                                    href="{{ url('admin/product-status', [base64_encode($product->id)]) }}">InActive</a>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info"
                                href="{{ url('admin/product-view', [base64_encode($product->slug)]) }}">View Prouct</a>
                            <a class="btn btn-sm btn-info"
                                href="{{ url('admin/product-edit', [base64_encode($product->slug)]) }}">Edit</a>
                            <a class="btn btn-sm btn-danger destroy"
                                href="{{ url('admin/product-delete', [base64_encode($product->id)]) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach



            </tbody>
        </table>
        {{ $productList->links('pagination::bootstrap-5') }}


    </div>
@endsection
