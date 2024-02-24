@extends('Backend.layouts.app')
@section('content')
    <div class="inner-body">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Countries</li>


                </ol>



            </div><a data-href="{{ url('admin/add-countrie') }}" class="btn btn-sm btn-success text-white add_model"
                data-bs-toggle="modal" data-bs-target="#add_model" style="float:right;">Add Countries</a>



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
                @foreach ($countrieList as $key => $countrie)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $countrie->name ?? null }}</td>

                        <td>
                            @if ($countrie->status = 1)
                                <a class="btn btn-sm btn-danger danger" href="">Active</a>
                            @else
                                <a class="btn btn-sm btn-danger danger" href="">Inactive</a>
                            @endif

                        </td>
                        <td>
                            <a data-href="{{ url('admin/add-countrie') }}" class="btn btn-sm btn-info text-white"
                                data-bs-toggle="modal" data-bs-target="#add_model">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>




    </div>
@endsection
