@extends('Backend.layouts.app')
@section('content')
    <style>
        .owl-theme:after {
            display: none;
        }

        .owl-theme:before {
            display: none;
        }

        input {
            color: #000 !important;
        }
    </style>
    <style>
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
        <form class="submitForm" action="{{ url('admin/products-update', [$productDetails->slug]) }}" method="post">
            <div class="bg-white p-2">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="category">Image <span class="text-danger">*</span></label>
                        <input type="file" id="files" name="image[]" multiple class="form-control" />
                        <br>
                        @php
                            $images = json_decode($productDetails->image);
                        @endphp
                        @foreach ($images as $image)
                            <img width="120px" src="{{ asset($image) }}" alt="">
                        @endforeach
                    </div>
                    <div class="imageShow d-flex">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Product">Product Name <span class="text-danger">*</span></label>
                            <input type="text" name="product" class="form-control" id="Product"
                                placeholder="Product Name" value="{{ $productDetails->product_name ?? null }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                                value="{{ $productDetails->title ?? null }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Select Category <span class="text-danger">*</span></label>
                            <select name="categorie" class="form-control" id="category">

                                @foreach ($subCatgory as $iteam)
                                    <option @if ($productDetails->sub_category_id == $iteam->id) selected @endif
                                        value="{{ $iteam->id ?? null }}">{{ $iteam->name ?? null }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Product">Shiping Charge</label>
                            <input type="number" name="shiping_charge" class="form-control" id="Product"
                                placeholder="Shiping Charge" value="{{ $productDetails->shiping_charge ?? null }}">
                        </div>
                    </div>
                </div>

                <label for="summernote">Product Overview</label>
                <textarea name="product_overview" id="summernote">
                    {!! $productDetails->product_overview ?? null !!}
                </textarea>
                <div class=" mt-2">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Status">Select Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control" id="Status" required>
                                    <option @if ($productDetails->status == 1) selected @endif value="1">Active</option>
                                    <option @if ($productDetails->status == 0) selected @endif value="0">InActive
                                    </option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="m-3">
                        <label for="category">Accordion <span class="text-danger">*</span></label>
                        @php
                            $accordians = json_decode($productDetails->accordion);
                        @endphp
                        @if (count($accordians) == 0)
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" name="accordion_name[]" class="form-control" id="Product"
                                        placeholder="Accordion Name" value="" required>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="descipition[]" class="form-control" id="Product"
                                        placeholder="Description" value="" required>
                                </div>
                                <div class="col-md-2">
                                    <div class="btn btn-success add">Add More</div>
                                </div>
                            </div>
                        @else
                            @foreach ($accordians as $key => $accordian)
                                @if ($key == 0)
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" name="accordion_name[]" class="form-control"
                                                id="Product" placeholder="Accordion Name" value="{{ $accordian[0] }}"
                                                required>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="descipition[]" class="form-control"
                                                id="Product" placeholder="Description" value="{{ $accordian[1] }}"
                                                required>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn btn-success add">Add More</div>
                                        </div>
                                    </div>
                                @else
                                    <div id="row{{ $key + 11111 }}" class="row">
                                        <div class="col-md-3">
                                            <input type="text" name="accordion_name[]" class="form-control"
                                                id="Product" placeholder="Accordion Name" value="" required>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="descipition[]" class="form-control"
                                                id="Product" placeholder="Description" value="" required>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn btn-danger add" onclick="removeAppend({{ $key + 11111 }});">
                                                Add More</div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                        <div class="appendColumn">

                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-between mt-2">
                <h4>Arrtibute</h4>
                <div id="addMoreAttr" class="btn btn-sm btn-success">Add
                    Arrtibute</div>
            </div>
            <div id="arrtibutes">
                @if(count($productDetails->productOverview)==0)

                <div class="row bg-white p-3 m-1">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Product Price <span class="text-danger">*</span></label>
                            <input type="number" name="product_price[]" class="form-control" id="Product"
                                placeholder="Shiping Charge">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Product">Sale Price <span class="text-danger">*</span></label>
                            <input type="number" name="product_sale_price[]" class="form-control"
                                id="Product" placeholder="Shiping Charge"
                                >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Total Stock <span class="text-danger">*</span></label>
                            <input type="number" name="stock[]" class="form-control" id="Product"
                                placeholder="Shiping Charge" >
                        </div>

                    </div>
                    
                </div>

                @else


                @foreach ($productDetails->productOverview as $key => $arrtibute)
                    <input type="hidden" name="skuId[]" value="{{ $arrtibute->sku_id ?? null }}">
                    @if ($key == 0)
                        <div class="row bg-white p-3 m-1">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Product Price <span class="text-danger">*</span></label>
                                    <input type="number" name="product_price[]" class="form-control" id="Product"
                                        placeholder="Shiping Charge" value="{{ $arrtibute->product_price ?? null }}">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Product">Sale Price <span class="text-danger">*</span></label>
                                    <input type="number" name="product_sale_price[]" class="form-control"
                                        id="Product" placeholder="Shiping Charge"
                                        value="{{ $arrtibute->sale_price ?? null }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Total Stock <span class="text-danger">*</span></label>
                                    <input type="number" name="stock[]" class="form-control" id="Product"
                                        placeholder="Shiping Charge" value="{{ $arrtibute->stock ?? null }}">
                                </div>

                            </div>
                            
                        </div>
                    @else
                        <div id="attributeRemove{{ $arrtibute->sku_id ?? null }}" id="arrtibutes"
                            style="position: relative">
                            <div onclick="deleteId({{ $arrtibute->sku_id ?? null }});" class="btn-danger btn btn-sm"
                                style="position: absolute;right: 19px;top: 5px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                                </svg>
                            </div>
                            <div class="row bg-white p-3 m-1">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">Product Price <span class="text-danger">*</span></label>
                                        <input type="number" name="product_price[]" class="form-control" id="Product"
                                            placeholder="Product Price" value="{{ $arrtibute->product_price ?? null }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Product">Sale Price <span class="text-danger">*</span></label>
                                        <input type="number" name="product_sale_price[]" class="form-control"
                                            id="Product" placeholder="Sale Price"
                                            value="{{ $arrtibute->sale_price ?? null }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">Total Stock <span class="text-danger">*</span></label>
                                        <input type="number" name="stock[]" class="form-control" id="Product"
                                            placeholder="Total Stock" value="{{ $arrtibute->stock ?? null }}">
                                    </div>

                                </div>
                                <div id="size" class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Size <span class="text-danger">*</span></label>
                                        <select style="color: #000;" name="size[]" class="form-control" id="category"
                                            >
                                            <option selected value="">Select a size</option>
                                            @foreach ($sizeList as $key => $size1)
                                                <option @if ($arrtibute->size == $size1->size) selected @endif
                                                    value="{{ $size1->size ?? null }}">{{ $size1->size ?? null }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                @endif
            </div>
            <div id="appendAttribute">

            </div>


            <div class="d-flex justify-content-between mt-5">
                <a href="{{ url('admin/products') }}" class="btn btn-md btn-danger">Cancel</a>
                <button class="btn btn-md btn-primary">Submit</button>
            </div>
    </div>
    </form>

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


        //Adding Dynamic Bullet points

        var row = 1;
        $(".add").click(function() {
            newRowAdd =
                '<div class="row mt-1" id="row' + row +
                '"><div class="col-md-3"><input type="text" name="accordion_name[]" class="form-control" id="Product" placeholder="Accordion Name" required> </div> <div class="col-md-7">' +
                '<input type="text" name="descipition[]" class="form-control" id="Product" placeholder="Description" required> </div><div class="col-md-2">' +
                '<div onclick="removeAppend(' + row +
                ')" class="btn btn-danger">Remove</div></div></div>';
            $('.appendColumn').append(newRowAdd);
            row = row + 1;
        });

        function removeAppend(rowId) {
            $("#row" + rowId).remove();
        }
        // For Adding Multiple Image and Removing
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    $('.imageShow').remove();
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img width='120px' height='80px' class=\" mg-5\" src=\"" +
                                e.target.result +
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/><lable class=\"remove\">Remove image</lable>" +
                                "</span>").insertAfter("#files");

                            $(".remove").click(function() {
                                $(document).on('click', '.remove', function() {
                                    var pips = $('.pip').toArray();
                                    var $selectedPip = $(this).parent('.pip');
                                    var index = pips.indexOf($selectedPip[0]);

                                    var dt = new DataTransfer();
                                    var files = $("#files")[0].files;

                                    for (var fileIdx = 0; fileIdx < files
                                        .length; fileIdx++) {
                                        if (fileIdx !== index) {
                                            dt.items.add(files[fileIdx]);
                                        }
                                    }
                                    $("#files")[0].files = dt.files;
                                    $selectedPip.remove();
                                });
                            });
                        });
                        fileReader.readAsDataURL(f);
                    }
                });
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: false,
                margin: 1,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        });

        var attrNumber = 1;
        $('#addMoreAttr').on('click', function() {
            attrNumber++;
            var attrHtml = `<div id="attributeRemove` + attrNumber + `" id="arrtibutes"  style="position: relative">
                    <div onclick="removeAttribut(` + attrNumber + `);" class="btn-danger btn btn-sm" style="position: absolute;right: 19px;top: 5px;">
                    <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                        <path  d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                    </svg>
                    </div>
                    <div class="row bg-white p-3 m-1">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Product Price <span class="text-danger">*</span></label>
                            <input type="number" name="product_price[]" class="form-control"
                                placeholder="Shiping Charge">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Sale Price <span class="text-danger">*</span></label>
                            <input type="number" name="product_sale_price[]" class="form-control"
                                placeholder="Shiping Charge">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Total Stock <span class="text-danger">*</span></label>
                            <input type="number" name="stock[]" class="form-control" id="Product"
                                placeholder="Shiping Charge">
                        </div>
                    </div>
                    <div class="col-md-6">
                   ` + $('#size').html() + `
                    </div>
                </div>
            </div>`;
            $('#appendAttribute').append(attrHtml);
        })

        function removeAttribut(number) {
            var Id = "#attributeRemove" + number;
            $(Id).remove();
        }

        function deleteId(number) {
            var id = number;
            var arrayOpsition = "{{ route('productAttr', ':id') }}";
            url = arrayOpsition.replace(':id', id);
            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                url: url,
                method: "GET",
                dataType: "json",
                success: function(response) {
                    if (response.responseCode == 200) {
                        toastr.success(response.responseMessage);
                        var Id = "#attributeRemove" + number;
                        $(Id).remove();
                    } else {
                        toastr.error(response.responseMessage);
                    }
                }
            });
        }
    </script>
@endsection
