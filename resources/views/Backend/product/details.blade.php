@extends('Backend.layouts.app')
@section('content')
    <style>
        .owl-theme:after {
            display: none;
        }

        .owl-theme:before {
            display: none;
        }
    </style>
    <style>
        input {
            color: black !important;
        }

        .img-thumb {

            border: 2px solid none;
            border-radius: 3px;
            padding: 1px;
            cursor: pointer;
        }

        .img-thumb-wrapper {
            display: inline-block;
            margin: 10px 10px 0 0;
        }

        .remove {
            background: red;
            position: relative;
            top: 9px;
            left: 12px;
            padding: 5px;
            border: 1px solid none;
            color: white;
            text-align: center;
            cursor: pointer;
        }

        .remove:hover {
            background: rgba(255, 0, 0, 0.521);
            color: black;
        }

        .pip {
            display: inline-block;
        }
    </style>
    <script src="https://kit.fontawesome.com/e7db147a51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <div style="margin: 0;" class="page-header">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                            class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Size</li>
            </ol>
        </div>
    </div>
    <div style="margin-bottom: 10px !important;" class="p-3">
        <div class="bg-white p-2">
            @csrf
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="category">Image</label>
                    <br>
                    @php
                        $images = json_decode($productDetails->image);
                    @endphp
                    @foreach ($images as $image)
                        <img width="120px" src="{{ asset($image ?? null) }}" alt="{{ $image ?? null }}">
                    @endforeach
                </div>
                <div class="imageShow d-flex">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Product">Product Name </label>
                        <input type="text" class="form-control" id="Product" readonly
                            value="{{ $productDetails->product_name ?? null }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Title </label>
                        <input type="text" class="form-control" readonly value="{{ $productDetails->title ?? null }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="category">Select Category</label>
                        <select style="color: #000;" class="form-control">
                            <option>{{ $productDetails->productCategorie->name ?? null }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Product">Shiping Charge</label>
                        <input type="number" class="form-control" readonly
                            value="{{ $productDetails->shiping_charge ?? null }}">
                    </div>
                </div>

            </div>





            <label for="summernote">Product Overview</label>
            <textarea readonly name="product_overview" id="summernote">
                {!! $productDetails->product_overview ?? null !!}
            </textarea>
            <div class=" mt-2">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Status">Select Status</label>
                            <select style="color: #000;" name="status" class="form-control" id="Status" required>
                                @if ($productDetails->status == 0)
                                    <option value="0">InActive</option>
                                @else
                                    <option value="1">Active</option>
                                @endif
                            </select>
                        </div>
                    </div>

                </div>
                <div class="m-3">
                    <label for="category">Accordion </label>
                    @php
                        $accordion = json_decode($productDetails->accordion);
                    @endphp
                    @foreach ($accordion as $key => $value)
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text"class="form-control" readonly value="{{ $value[0] ?? null }}" required>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" readonly placeholder="Description"
                                    value="{{ $value[1] ?? null }}" required>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-between mt-2">
            <h4>Arrtibute</h4>
        </div>
        @foreach ($productDetails->productOverview as $value)
            <div id="arrtibutes">
                <div class="row bg-white p-3 m-1">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Product Price</label>
                            <input type="number" readonly class="form-control" value="{{$value->product_price ?? null}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Product">Sale Price</label>
                            <input type="number" readonly class="form-control" value="{{$value->sale_price ?? null}}">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Total Stock</label>
                            <input type="number" readonly class="form-control" value="{{$value->stock ?? null}}">

                        </div>
                    </div>
                    <div id="size" class="col-md-6">
                        <div class="form-group">
                            <label>Select Size</label>
                            <select style="color: #000;" class="form-control" id="category" required>
                                <option selected>{{$value->size ?? null}}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter the product details',
                tabsize: 3,
                height: 200,

            });
            $('#sidenavUl').addClass('show');
            document.getElementById('productLink').style = 'color:white;';
        });
    </script>
@endsection
