@extends('layouts.app')

@section('title')
TOP(SP)
@endsection

@section('content')

{{--<!--   nav   -->--}}
<main>

    <header>

        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    {{--<!--  Home -->--}}
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Clazy') }} -->
                    </a>


                    {{--<!--  hamburger toggle -->--}}
                    <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    {{--<!--  hamburger toggle elements -->--}}
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <a class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fas fa-home"></i>
                                {{ __('logout') }}
                                </a>
                                <form id     ="logout-form"
                                action ="{{ route('logout') }}"
                                method ="POST"
                                style  ="display: none;">
                                @csrf
                                </form>

                                <!-- <a class="aaa" href=""><i class="fas fa-external-link-alt fa-7x"></i></a> -->
                                <a class="dropdown-item"
                                href="{{ route('Clazy.firstInformation') }}">
                                <i class="fas fa-chart-line"></i>
                                {{ __('dashboard') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    {{--<!--   main  -->--}}
    <div class="box container">
        <div class="row">
        {{--<!-- logo -->--}}
        <div class="text-center">
            <a href="{{ route('login.top') }}">
                <img src="{{ asset ('img/sp_logo.png') }}" alt="logo of Clazy" class="img-fluid" style="margin-top: 80px">
            </a>
        </div>


        {{--<!--   input  -->--}}
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('Clazy.create') }}"></a>
            </div>
        </div>

        <div class="row" class="text-center">
            <div class="col-lg-12" >
            <div class="input-group text-center">
                <div class="text-center">
                <a href="{{ route('Clazy.create') }}">
                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" style="border-radius: 50px 0px 0px 50px; width: 320px;" placeholder="please input your expense~" >
                </a>
                </div>
                <div class="input-group-append" style="border-radius: 0px 50px 50px 0px;background-color: orange">
                    <button class="btn btn-outline-secondary" type="button" style="border-radius: 0px 50px 50px 0px;background-color: #bf9033"><i class="fas fa-calculator fa-1x" style="color: white;"></i></button>
                </div>
            </div>
        </div>
        </div>
    </div>
</main>

@section('content')
