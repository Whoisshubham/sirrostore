@extends('Backend.layouts.app')
@section('content')
    <style>
        #position {
            position: relative;
            display: flex;
            justify-content: center;

        }

        #position>label>i {
            opacity: 0.2;
            cursor: pointer;
        }

        #textImage {
            z-index: 11111;
            position: absolute;
            cursor: pointer;
            top: 50%;
        }

        .imageContanior {
            position: relative;
        }

        .copyPath {
            display: flex;
            position: absolute;
            justify-content: center;
            align-items: center;
            text-align: center;
            top: 0px;
            right: 15px;
            left: 15px;
            bottom: 25px;
            background: white;
            cursor: pointer;
            opacity: 0;
            transition: 0.4s ease-in-out;
        }

        .copyPath:hover {
            opacity: 0.8;

        }
    </style>
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                            class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{ url('admin/gallery') }}">Gallery</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $getData->name ?? null }}</li>
            </ol>
        </div>

    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-8">
                <div class="btn-indigo p-2">
                    <h1>{{ $getData->name ?? null }}</h1>
                </div>
                <div class="row mt-2">
                    @foreach ($photosList as $photo)
                        <div class="col-md-4" class="imageContanior">
                            <img src="{{ asset($photo->image) }}">
                            <div class="copyPath" onclick="copy('{{ $photo->image }}');" title="demo">
                                <p> Click Here To Copy Path!</p>
                            </div>
                            <div class="btn btn-sm btn-danger"> <a class="text-white" href="{{ url('admin/gallery/unlink/image', [$photo->id]) }}"> Remove</a></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="btn-indigo p-2">
                    <h1>Image Add</h1>
                </div>
                <div class="bg-white p-2">
                    <form class="bg-white p-2" action="{{ url('admin/gallery/upload', [$getData->slug]) }}"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        <div id="selected-images" class="row">

                        </div>
                        <div class="form-group" id="position">
                            <label for="imageupload"> <i style="font-size: 150px"
                                    class="ti-image sidemenu-icon menu-icon"></i>
                                <p id="textImage">Click Here To Upload Images!</p>
                            </label>
                        </div>
                        <input type="file" class="image-file" id="imageupload" style="display: none"
                            accept=".jpg,.png,.jpeg,.img" multiple>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            if (window.File && window.FileList && window.FileReader) {
                $(".image-file").on("change", function(e) {
                    var file = e.target.files,
                        imagefiles = $(".image-file")[0].files;
                    var i = 0;
                    $.each(imagefiles, function(index, value) {
                        var f = file[i];
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {

                            $("#selected-images").append(
                                '<div  class="pip col-md-6" style="">' +
                                '<div style="border:1px solid black;"><img style="width: 120px; height: 100px;" src="' +
                                e
                                .target.result + '" class="prescriptions">' +
                                '<p style="word-break: break-all;">' + value.name +
                                '</p></div>' +
                                '<p class="cross-image remove bg-danger" style="cursor:pointer;">Remove</p>' +
                                '<input type="hidden" name="image[]" value="' + e.target
                                .result + '">' +
                                '</div>');
                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                            });
                        });
                        fileReader.readAsDataURL(f);
                        i++;
                    });
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @if (session('success'))
        <script>
            toastr.success('{{ session('success') }}');
        </script>
    @endif
    @if (session('error'))
        <script>
            toastr.error('{{ session('error') }}');
        </script>
    @endif
    <script>
        function copy(data) {
            navigator.clipboard.writeText(data);
            toastr.success("copied: '" + data + "'");
        }
    </script>
@endsection
