@extends('Backend.layouts.app')
@section('content')
    <div class="inner-body">

        <!-- Page Header -->

        <div class="page-header">

            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">State</li>
                </ol>
            </div>

            <!-- End Page Header -->

            <table class="table mt-3">

                <div class="d-flex">
                    <form action="{{ url('admin/export-orders') }}" method="POST">
                        <select name="export_by" class="form-select" style="margin-right:10px">
                            <option selected value="1">Approved</option>
                            <option value="3">Rejected</option>
                            <option value="0">Pending</option>
                        </select>
                        @csrf
                        <button class="btn btn-sm btn-info">Export</button>
                    </form>
                </div>
                <thead>
                    <tr class="table-dark">
                        <th scope="col" class="text-white">#</th>
                        <th scope="col" class="text-white">Name</th>
                        <th scope="col" class="text-white">Order Id</th>
                        <th scope="col" class="text-white">Bill Name</th>
                        <th scope="col" class="text-white">Phone</th>
                        <th scope="col" class="text-white">Payment Mode</th>
                        <th scope="col" class="text-white">Final Amount</th>
                        <th scope="col" class="text-white">Order Status</th>
                        <th scope="col" class="text-white">Create At</th>
                        <th scope="col" class="text-white">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($userOrder as $key => $orders)
                        <tr>
                            <th scope="row">{{ $key + 1 ?? null }}</th>
                            <td>{{ $orders->usersDetails->fname ?? null }}&nbsp;{{ $orders->usersDetails->lname ?? null }}
                            </td>
                            <td>{{ $orders->orders_id ?? null }}</td>
                            <td>{{ $orders->fname ?? null }}-{{ $orders->lname ?? null }}</td>
                            <td>{{ $orders->phone ?? null }}</td>
                            <td>{{ $orders->payment_mode ?? null }}</td>
                            <td>{{ $orders->final_price ?? null }}</td>
                            <td>
                                @if ($orders->order_status == 0)
                                    Waiting for approval
                                @elseif ($orders->order_status == 1)
                                    Approved
                                @elseif ($orders->order_status == 3)
                                    Rejected
                                @endif

                            </td>
                            <td>{{ $orders->created_at ?? null }}</td>
                            <td>
                                <div class="btn-group">

                                    <button style="border: none;background:none;" class="dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0">
                                            </path>
                                        </svg>
                                    </button>

                                    <ul class="dropdown-menu">
                                        @if ($orders->order_status == 0)
                                            <li><a class="dropdown-item"
                                                    href="{{ url('admin/approved', [$orders->orders_id ?? null]) }}">Approved</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ url('admin/reject', [$orders->orders_id ?? null]) }}">Reject</a>
                                            </li>
                                        @endif
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ url('admin/order-details', [$orders->orders_id ?? null]) }}">Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <style>
            .dropdown-toggle::after {
                border: none;
            }
        </style>
    @endsection
