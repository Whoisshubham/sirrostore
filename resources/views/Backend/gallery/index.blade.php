@extends('Backend.layouts.app')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                            class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </div>

    </div>

    <div>
        <div class="row">
            <div class="col-md-8">
                <div class="box bg-white">
                    <div class="btn-indigo p-2">
                        <h1>GALLERY LIST</h1>
                    </div>
                    @foreach ($galleryList as $gallery)
                        <div class="box m-2 ">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ url('admin/gallery', [$gallery->slug]) }}">
                                        <div class="btn-indigo p-2">
                                            <h4 class="">{{ $gallery->name ?? null }}</h4>
                                        </div>
                                    </a>
                                    <div style="height: 60px;background:grey;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <form class="submitForm" action="{{ url('admin/gallery-store') }}" method="post">
                        @csrf
                        <div class="header bg-indigo text-white p-2">
                            <h2>CREATE GALLERY</h2>
                        </div>
                        <div class="body">
                            <div class="form-line m-2">
                                <label class="form-label">Gallery Name</label>
                                <input type="text" name="name" class="form-control" required="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-indigo btn-lg">
                            <i class="ti-save"></i>
                            <span>SAVE</span>
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
    </div>
    <script>
        $('#sidenavUl').removeClass('nav-item active');
        // $('#sidenavUl').addClass('active');
    </script>
@endsection
