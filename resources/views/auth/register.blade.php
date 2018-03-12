@extends('layouts.master')

@section('content')
    <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

    </div>

    <header class="site-header position-static">
        <div class="container-fluid">
            <a href="#" class="site-logo">
                <img class="hidden-md-down" src="/img/logo-2.png" alt="">
                <img class="hidden-lg-down" src="/img/logo-2-mob.png" alt="">
            </a>
            <div class="site-header-content">
                <div class="site-header-content-in">
                    <div class="site-header-shown">
                        <div class="dropdown dropdown-lang">
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                <span class="flag-icon flag-icon-{{config('app.locale')=='ko'? 'kr':(config('app.locale')=='en'? 'us':(config('app.locale')=='vi'?'vn':''))}}"
                                      id="flag-change"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-col">
                                    <a class="dropdown-item current" onclick="setLocate('ko')"><span
                                                class="flag-icon flag-icon-kr"></span>Korea</a>
                                </div>
                                <div class="dropdown-menu-col">
                                    <a class="dropdown-item " onclick="setLocate('en')"><span
                                                class="flag-icon flag-icon-us"></span>English</a>
                                    <a class="dropdown-item " href="#" onclick="setLocate('vi')"><span
                                                class="flag-icon flag-icon-vn"></span>Viet Nam</a>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="burger-right">
                            <i class="font-icon-menu-addl"></i>
                        </button>
                    </div><!--.site-header-shown-->

                    <div class="mobile-menu-right-overlay"></div>
                </div><!--site-header-content-in-->
            </div><!--.site-header-content-->
        </div><!--.container-fluid-->
    </header>
    <div class="container">
        <div class="row">
            <div class="page-center">
                <div class="panel panel-default main-login page-center-in">
                    {{--<div class="panel-heading">{{trans('auth.register')}}</div>--}}

                    <div class="panel-body">
                        <form class="form-horizontal sign-box" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="sign-avatar no-photo">&plus;</div>
                            <header class="sign-title">{{trans('auth.register')}}</header>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                       required autofocus placeholder="{{trans('auth.name')}}"/>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required placeholder="{{trans('auth.email')}}"/>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password"
                                       placeholder="{{trans('auth.password')}}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" placeholder="{{trans('auth.confirm-pass')}}"
                                       required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded">
                                    {{trans('auth.register')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
