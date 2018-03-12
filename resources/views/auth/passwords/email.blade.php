@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-center marginTop">
            <div class="page-center-in">
                <div class="container-fluid">
                    <form class="sign-box reset-password-box" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <header class="sign-title">Reset Password</header>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email" required/>
                            @if ($errors->has('email'))--}}
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-rounded">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
