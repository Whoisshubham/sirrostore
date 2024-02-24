@extends('Backend.layouts.app')
@section('content')
    <div class="inner-body">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </div>

        </div>
        <!-- End Page Header -->

        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col" class="text-white">#</th>
                    <th scope="col" class="text-white">Name</th>
                    <th scope="col" class="text-white">Email</th>
                    <th scope="col" class="text-white">Subject</th>
                    <th scope="col" class="text-white">Message</th>
                    <th scope="col" class="text-white">Status</th>
                    <th scope="col" class="text-white">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactList as $key => $iteam)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $iteam->name ?? null }}</td>
                        <td>{{ $iteam->email ?? null }}</td>
                        <td>{{ $iteam->subject ?? null }}</td>
                        <td>{{ $iteam->message ?? null }}</td>
                        <td>
                            @if ($iteam->status == 0)
                                <span class="text-danger"> Unread </span>
                            @else
                                <span class="text-danger"> Read </span>
                            @endif
                        </td>
                        <td>
                            @if ($iteam->status == 0)
                                <a class="btn btn-sm btn-info destroy"
                                    href="{{ url('admin/contact-us-status', [base64_encode($iteam->id)]) }}">Mark
                                    as read</a>
                            @else
                                <a class="btn btn-sm btn-danger destroy"
                                    href="{{ url('admin/contact-us-delete', [base64_encode($iteam->id)]) }}">Delete</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
