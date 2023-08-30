@extends('layouts.backend.app')

@section('page-css')
    <!-- select 2 css -->
    <link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
@stop
@section('title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">{{__('Profile')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('Profile')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@stop
<!-- end page title -->

@section('content')
    <!-- start row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified gap-3" role="tablist">
                                <li class="nav-item waves-effect waves-light border border-1 border-primary rounded">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#overview" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">OverView</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light border border-1 border-primary rounded">
                                    <a class="nav-link" data-bs-toggle="tab" href="#edit" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Edit</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light border border-1 border-primary rounded">
                                    <a class="nav-link" data-bs-toggle="tab" href="#resetPassword" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Reset Password</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="overview" role="tabpanel">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <h4 class="card-header mt-0">Profile Info</h4>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Name')}} :</span>
                                        <strong>{{auth()->user()->name}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Email')}} :</span>
                                        <strong>{{auth()->user()->email}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Phone')}} :</span>
                                        <strong>{{auth()->user()->phone}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('User Address')}} :</span>
                                        <strong>{{auth()->user()->address}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('City')}} :</span>
                                        <strong>{{auth()->user()->city}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('State')}} :</span>
                                        <strong>{{auth()->user()->state}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Country')}} :</span>
                                        <strong>{{isset(auth()->user()->country->name) ? auth()->user()->country->name :""}}</strong>
                                    </div>
                                    <div class="mb-3">
                                        <span class="form-label">{{__('Post code')}} :</span>
                                        <strong>{{auth()->user()->post_code}}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="edit" role="tabpanel">
                    <form method="post" action="{{route('admin.profile.update')}}">
                        @csrf
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <div class="card">
                                    <h4 class="card-header mt-0">Profile Info</h4>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">{{__('Name')}}<span
                                                    class="text-danger">*</span></label>
                                            <input
                                                class="form-control @error('name') is-invalid @enderror"
                                                name="name"
                                                type="text"
                                                id="name"
                                                value="{{auth()->user()->name}}" required
                                            />
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">{{__('Email')}}</label>
                                            <input
                                                class="form-control @error('email') is-invalid @enderror"
                                                name="email"
                                                type="email"
                                                id="email"
                                                value="{{auth()->user()->email}}" readonly
                                            />
                                            <small>{{__('Your can not update your login email')}}</small>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">{{__('Phone')}}<span
                                                    class="text-danger">*</span></label>
                                            <input
                                                class="form-control @error('email') is-invalid @enderror"
                                                name="phone"
                                                type="text"
                                                id="phone"
                                                value="{{auth()->user()->phone}}" required
                                            />
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">{{__('User Address')}}<span
                                                    class="text-danger">*</span></label>
                                            <textarea
                                                class="form-control"
                                                name="address"
                                                id="address"
                                                required
                                            >{{auth()->user()->address}}</textArea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="city" class="form-label">{{__('City')}}<span
                                                    class="text-danger">*</span></label>
                                            <input
                                                class="form-control @error('city') is-invalid @enderror"
                                                name="city"
                                                type="text"
                                                id="city"
                                                value="{{auth()->user()->city}}" required
                                            />
                                            @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="state" class="form-label">{{__('State')}}<span
                                                    class="text-danger">*</span></label>
                                            <input
                                                class="form-control @error('state') is-invalid @enderror"
                                                name="state"
                                                type="text"
                                                id="state"
                                                value="{{auth()->user()->state}}" required
                                            />
                                            @error('state')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="country" class="form-label d-block">{{__('Country')}}<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" name="country_id"
                                                    style="width: 100% !important;" required>
                                                <option>Select Country</option>
                                                @if(!empty($countries))
                                                    @foreach($countries as $country)
                                                        <option
                                                            value="{{$country->id}}" {{auth()->user()->country_id === $country->id ? 'selected':''}}> {{$country->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="post_code" class="form-label d-block">{{__('Post Code')}}<span class="text-danger">*</span></label>
                                            <input
                                                class="form-control @error('post_code') is-invalid @enderror"
                                                name="post_code"
                                                id="post_code"
                                                type="text"
                                                value="{{auth()->user()->post_code}}" required
                                            />
                                            @error('post_code')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="float-end">
                                            <button class="btn btn-success ">{{__('Update')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="resetPassword" role="tabpanel">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="card">
                                <h4 class="card-header mt-0">Reset Password</h4>
                                <div class="card-body">
                                    <form method="post" action="#">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="password" class="form-label">{{__('Password')}}</label>
                                            <input
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password"
                                                type="password"
                                            />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password-confirm"
                                                   class="form-label">{{__('Re-type New Password')}}</label>
                                            <input
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password-confirm"
                                                type="password"
                                            />
                                        </div>
                                        <div class="float-end">
                                            <button type="button" class="btn btn-success ">{{__('Reset')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@stop
@section('page-script')

    <!-- select 2 js -->
    <script src="/assets/libs/select2/js/select2.min.js"></script>
    <!-- form advanced init -->
    <script src="/assets/js/pages/form-advanced.init.js"></script>

    <script>
        //copy name
        $(document).on('click', '.bill_to', function () {
            let bill_to = $(document).find('#name').val()
            $(this).parent().parent().find('input').val(bill_to)
        })

        //copy email
        $(document).on('click', '.billing_email', function () {
            let billing_email = $(document).find('#email').val()
            $(this).parent().parent().find('input').val(billing_email)
        })

        //copy phone
        $(document).on('click', '.billing_phone', function () {
            let billing_phone = $(document).find('#phone').val()
            $(this).parent().parent().find('input').val(billing_phone)
        })

        //copy address
        $(document).on('click', '.billing_address', function () {
            let billing_address = $(document).find('#address').val()
            $(this).parent().parent().find('textarea').val(billing_address)
        })

        //copy city
        $(document).on('click', '.billing_city', function () {
            let billing_city = $(document).find('#city').val()
            $(this).parent().parent().find('input').val(billing_city)
        })

        //copy state
        $(document).on('click', '.billing_state', function () {
            let billing_state = $(document).find('#state').val()
            $(this).parent().parent().find('input').val(billing_state)
        })

        //copy post code
        $(document).on('click', '.billing_post_code', function () {
            let billing_post_code = $(document).find('#post_code').val()
            $(this).parent().parent().find('input').val(billing_post_code)
        })

    </script>
@stop
