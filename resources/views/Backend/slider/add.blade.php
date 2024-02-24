@extends('Backend.layouts.app')
@section('content')
    <div class="inner-body">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categorie</li>
                </ol>
            </div>
            <div class="d-flex">
                <div class="justify-content-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fe fe-plus"></i> Slider
                    </button>


                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col" class="text-white">#</th>
                    <th scope="col" class="text-white">Image</th>
                    <th scope="col" class="text-white">Button Link</th>
                    <th scope="col" class="text-white">Status</th>
                    <th scope="col" class="text-white">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sliderList as $key => $iteam)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td><img width="180px" height="80px" src="{{ asset($iteam->image ?? null) }}" alt=""></td>
                        <td><a href="{{ $iteam->button_link ?? null }}">{{ $iteam->button_link ?? null }}</a></td>
                        <td>
                            @if ($iteam->status == 0)
                                <a class="btn btn-sm btn-success statusUpdate"
                                    href="{{ url('admin/status-slider', [base64_encode($iteam->id)]) }}">Inactive</a>
                            @else
                                <a class="btn btn-sm btn-success statusUpdate"
                                    href="{{ url('admin/status-slider', [base64_encode($iteam->id)]) }}">Active</a>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info"
                                href="{{ url('admin/edit-slider', [base64_encode($iteam->id)]) }}">Edit</a>
                            <a class="btn btn-sm btn-danger destroy"
                                href="{{ url('admin/delete-slider', [base64_encode($iteam->id)]) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            {{-- <span aria-hidden="true">×</span> --}}
                        </button>
                    </div>
                    <form class="submitForm" action="{{ url('admin/store-slider') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image <span
                                        class="text-danger">*<span></label>
                                <input name="image" type="file" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Link </label>
                                <input name="button_link" type="link" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>

                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
