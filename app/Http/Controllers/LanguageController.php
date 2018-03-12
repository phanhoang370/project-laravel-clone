<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App;
use Lang;

class LanguageController extends Controller
{
    public function index(Request $request){
        if($request->lang <> ''){
            app()->setLocale($request->lang);
        }
        if (Auth::check())
            return redirect(config('app.locale').'/dashboard/new');
        else
            return redirect(config('app.locale').'/login');
    }
    public function login(Request $request){
        if($request->lang <> ''){
            app()->setLocale($request->lang);
        }
        return view('auth.login');
    }
    public function register(Request $request){
        if($request->lang <> ''){
            app()->setLocale($request->lang);
        }
        return view('auth.register');
    }
    public function dashboard(Request $request){
        if($request->lang <> ''){
            app()->setLocale($request->lang);
        }
        return view('layouts.app');
    }
    public function newDashboard(Request $request){
        if($request->lang <> ''){
            app()->setLocale($request->lang);
        }
        return view('new');
    }
}
