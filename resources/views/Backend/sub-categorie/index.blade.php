@extends('Backend.layouts.app')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                            class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Subcategorie</li>
            </ol>
        </div>
        <div class="d-flex">
            <div class="justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fe fe-plus"></i>Subcategorie</button>


            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col" class="text-white">#</th>
                <th scope="col" class="text-white">category</th>
                <th scope="col" class="text-white">Name</th>
                <th scope="col" class="text-white">Slug</th>
                <th scope="col" class="text-white">Status</th>
                <th scope="col" class="text-white">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subCategorieList as $key => $subCatrgorie)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $subCatrgorie->categoryName->name ?? null }}</td>
                    <td>{{ $subCatrgorie->name ?? null }}</td>
                    <td>{{ $subCatrgorie->slug ?? null }}</td>
                    <td>
                        @if ($subCatrgorie->status == 1)
                            <a class="btn btn-sm btn-success statusUpdate" href="{{ url('admin/sub-category-status', [base64_encode($subCatrgorie->id)]) }}">Active</a>
                        @else
                            <a class="btn btn-sm btn-danger statusUpdate" href="{{ url('admin/sub-category-status', [base64_encode($subCatrgorie->id)]) }}">InActive</a>
                        @endif
                    </td>
                    <td>
                        <a data-href="{{ url('admin/edit-sub-category',[base64_encode($subCatrgorie->id)]) }}" class="btn btn-sm btn-info text-white edit_model"
                                data-bs-toggle="modal" >Edit</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Categorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="submitForm" action="{{ url('admin/store-sub-category') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="" class="form-label">City</label>
                            <select class="form-select form-select-lg" name="categorie_id" id="">
                                <option selected>Select Categorie</option>
                                @foreach ($categorieList as $categorie)
                                    <option value="{{$categorie->id ?? null}}">{{ $categorie->name ?? null }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Sub Categories</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Sub Categorie Name" aria-describedby="emailHelp">
                        </div>


                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection