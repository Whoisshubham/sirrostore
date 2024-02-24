@extends('Backend.layouts.app')
@section('content')
    <script src="https://kit.fontawesome.com/e7db147a51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <div class="page-header">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                            class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Content</li>
            </ol>
        </div>
        <div class="d-flex">
            <div class="justify-content-center">
            </div>
        </div>
    </div>
    <main class="p-3 bg-white">
        <div>
            <form class="submitForm" method="post" action="{{ url('admin/page-content/store', [$id]) }}">
                @csrf
                <div>
                    <label for="">Where You Want To Show ?</label>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <label for="header" class="form-label text-dark">Side-Nav <input type="checkbox" name="header"
                            {{ $pageContent->header !== null ? 'Checked' : ' ' }} value="1"></label>

                    <label for="About" class="form-label text-dark">About-us <input id="About" type="checkbox"
                            name="about" {{ $pageContent->about !== null ? 'Checked' : ' ' }} value="1"></label>

                    <label for="suppot" class="form-label text-dark">Suppot <input id="suppot" type="checkbox"
                            name="suppot" {{ $pageContent->support !== null ? 'Checked' : ' ' }} value="1"></label>


                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Page Name</label>
                    <input name="page_name" type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Ex:- PRIVACY" aria-describedby="emailHelp" value="{{ $pageContent->name ?? null }}">
                </div>
                <div class="form-group">
                    <label for="summernote">Product Overview</label>
                    <textarea name="page_content" id="summernote">
                        {{ $pageContent->content ?? null }}
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </main>
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
        $("#sidenavUl").removeAttr('class');
        $("#pageCreate").addClass('active');
    </script>
@endsection
