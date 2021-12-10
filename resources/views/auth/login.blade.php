@extends('admin::layouts.login')
@section('content')
<div class="login-header box-shadow">
<div class="container-fluid d-flex justify-content-between align-items-center">
    <div class="brand-logo">
        <a href="login.html">
            <img src="{{asset('admin/vendors/images/deskapp-logo.svg')}}" alt="">
        </a>
    </div>
    <div class="login-menu">
        <!-- <ul>
            <li><a href="register.html">Register</a></li>
        </ul> -->
    </div>
</div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="{{asset('admin/vendors/images/login-page-img.png')}}" alt="">
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Login To DeskApp</h2>
                    </div>
                    <form method="POST" action="{{ route('login-proses') }}">
                        @csrf
                        <div class="input-group custom">
                            <input id="nip" type="text" name="nip" class="form-control @error('nip') is-invalid @enderror form-control-lg" value="{{ old('nip') }}" placeholder="NIP">
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror form-control-lg" placeholder="**********">
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection