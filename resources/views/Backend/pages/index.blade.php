@extends('Backend.layouts.app')
@section('content')
    <div class="inner-body">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Size</li>
                </ol>
            </div>
            <div class="d-flex">
                <div class="justify-content-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fe fe-plus"></i> Add Page
                    </button>


                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col" class="text-white">#</th>
                    <th scope="col" class="text-white">Name</th>
                    <th scope="col" class="text-white">Status</th>
                    <th scope="col" class="text-white">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pagesList as $key => $list)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $list->name ?? null }}</td>
                        <td>
                            <a class="btn btn-sm btn-success statusUpdate"
                                href="{{ url('page-status', [$list->id]) }}">Active</a>
                        </td>
                        <td>
                            @if ($list->content == null)
                                <a class="btn btn-sm btn-info" href="{{ url('admin/page-content', [$list->id]) }}">Add
                                    Content</a>
                            @else
                                <a class="btn btn-sm btn-info" href="{{ url('admin/edit-content', [$list->id]) }}">Edit
                                    Content</a>
                            @endif

                            <a class="btn btn-sm btn-info destroy" href="{{ url('pages', [$list->slug]) }}">View Page</a>
                            <a class="btn btn-sm btn-danger destroy"
                                href="{{ url('admin/page-delete', [$list->id]) }}">Delete</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Page</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="false">x</span>
                        </button>
                    </div>
                    <form class="submitForm" action="{{ url('admin/add-page') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3 d-flex justify-content-between">
                                <label for="header" class="form-label text-dark">Side-Nav <input type="checkbox"
                                        name="header" value="1"></label>

                                <label for="About" class="form-label text-dark">About-us <input id="About" type="checkbox"
                                        name="about" value="1"></label>

                                <label for="suppot" class="form-label text-dark">Suppot <input id="suppot" type="checkbox"
                                        name="suppot" value="1"></label>


                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Page Name</label>
                                <input name="page_name" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Ex:- PRIVACY" aria-describedby="emailHelp">
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
