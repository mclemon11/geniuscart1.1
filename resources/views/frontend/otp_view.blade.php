@extends('layouts.front')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <section class="gs-breadcrumb-section bg-class"
        data-background="{{ $gs->breadcrumb_banner ? asset('assets/images/' . $gs->breadcrumb_banner) : asset('assets/images/noimage.png') }}">
        <div class="container">
            <div class="row justify-content-center content-wrapper">
                <div class="col-12">
                    <h2 class="breadcrumb-title">@lang('User Otp Login')</h2>
                    <ul class="bread-menu">
                        <li><a href="{{ route('front.index') }}">@lang('Home')</a></li>
                        <li><a href="javascript:;">@lang('User Otp Login')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="gs-reg-section wow-replaced" data-wow-delay=".1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto reg-area">
                    <div class="reg-content">
                        <h4 class="text-center">@lang('login With Otp') </h4>
                        <form action="{{ route('user.opt.login.view.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">

                                <div>
                                    <label for="otp">@lang('Enter Your Otp')</label>
                                    <input type="phone" name="otp" class="form-control" id="otp"
                                        placeholder="@lang('Enter Your Otp')">

                                    @if ($errors->has('otp'))
                                        <span class="text-danger">{{ $errors->first('otp') }}</span>
                                    @endif
                                </div>

                                <button type="submit" class="template-btn btn-forms">@lang('Login')</button>

                            </div>
                        </form>
                    </div>
    </section>
@endsection
