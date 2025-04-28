@extends('layouts.guest')
@section('content')

    <div id="wrapper-admin">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4 login_div">
                    <div class="logo mt-30">
                        <img src="{{ asset('images/logo_login.png') }}" alt="" class="logo_img">
                    </div>
                    <form class="yourform mt-20" action="{{ route('login') }}" method="post">
                        @csrf
                        <h3 class="heading">Admin Login</h3>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="{{ __('toufiqalam4041@gmail.com') }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="{{ __('12356') }}" required>
                        </div>
                        <input type="submit" name="login" class="btn btn-danger login_btn" value="login" />
                    </form>
                    @error('username')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
@endsection
