@extends('Backend.layouts.app')
@section('content')
    <div class="page-header">
        <div>

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                            class="ti-home sidemenu-icon menu-icon"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Setting</li>
            </ol>
        </div>

    </div>
    <div class="mb-5">
        <form action="{{ url('admin/setting-store') }}" class="submitForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-white p-5">

                <div class="form-group">
                    <label>Website Name</label>
                    <input type="text" name="website_name" class="form-control" placeholder="Heading Text"
                        value="{{ $settingData->website_name ?? null }}">
                </div>
                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" id="image" name="logo" class="form-control">
                    @isset($settingData->logo)
                        <img style="background: rgba(0, 0, 0, 0.315);" width="150px" height="80px"
                            src="{{ asset($settingData->logo ?? null) }}" alt="">
                    @endisset
                </div>
                <div class="form-group">
                    <label>Fav-icon</label>
                    <input type="file" id="image" name="icon" class="form-control">
                    @isset($settingData->fav_icon)
                        <img style="background: rgba(0, 0, 0, 0.438);" width="150px" height="80px"
                            src="{{ asset($settingData->fav_icon ?? null) }}" alt="">
                    @endisset
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">

                            <label>Currency</label>
                            <input type="text" name="currency" class="form-control" placeholder="Ex:- AED"
                                value="{{ $settingData->currency ?? null }}">
                        </div>
                        <div class="col-md-6">

                            <label>Value</label>
                            <input type="text" name="exchange_rate" class="form-control" placeholder="Ex:- 1"
                                value="{{ $settingData->exchange_rate ?? null }}">
                        </div>

                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
@endsection
